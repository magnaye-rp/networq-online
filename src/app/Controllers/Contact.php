<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Email as EmailConfig;
use CodeIgniter\Email\Email;

class Contact extends BaseController
{
    public function sendMessage()
    {
        // Get POST data
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Basic validation
        if (empty($name) || empty($email) || empty($message)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Please fill in all fields.'
            ]);
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Please enter a valid email address.'
            ]);
        }

        try {
            // Initialize email service
            $emailConfig = new EmailConfig();
            $emailService = \Config\Services::email();
            
            // Configure email
            $emailService->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
            $emailService->setTo($emailConfig->fromEmail); // Send to the same email
            $emailService->setSubject('New Contact Form Submission from Portfolio');
            
            // Create email body
            $emailBody = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong></p>
            <div style='background-color: #f5f5f5; padding: 15px; border-radius: 5px; margin: 10px 0;'>
                " . nl2br(htmlspecialchars($message)) . "
            </div>
            <hr>
            <p><small>Sent from Portfolio Contact Form on " . date('Y-m-d H:i:s') . "</small></p>
            ";
            
            $emailService->setMessage($emailBody);
            $emailService->setMailType('html');

            // Send email
            if ($emailService->send()) {
                // Also send a confirmation to the user
                $confirmationEmail = \Config\Services::email();
                $confirmationEmail->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
                $confirmationEmail->setTo($email);
                $confirmationEmail->setSubject('Thank you for contacting Ryan Paulo Magnaye');
                
                $confirmationBody = "
                <h2>Thank you for your message!</h2>
                <p>Hi {$name},</p>
                <p>Thank you for reaching out through my portfolio contact form. I have received your message and will get back to you as soon as possible.</p>
                
                <p><strong>Your message:</strong></p>
                <div style='background-color: #f5f5f5; padding: 15px; border-radius: 5px; margin: 10px 0;'>
                    " . nl2br(htmlspecialchars($message)) . "
                </div>
                
                <p>Best regards,<br>
                Ryan Paulo Magnaye<br>
                Backend-Focused Software Developer</p>
                
                <hr>
                <p><small>This is an automated confirmation email. Please do not reply to this email.</small></p>
                ";
                
                $confirmationEmail->setMessage($confirmationBody);
                $confirmationEmail->setMailType('html');
                $confirmationEmail->send();

                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Thank you for your message! I\'ll get back to you soon.'
                ]);
            } else {
                // Log the error for debugging
                log_message('error', 'Email sending failed: ' . $emailService->printDebugger());
                
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Sorry, there was an error sending your message. Please try again later or contact me directly.'
                ]);
            }

        } catch (\Exception $e) {
            // Log the exception
            log_message('error', 'Contact form error: ' . $e->getMessage());
            
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Sorry, there was an error processing your message. Please try again later or contact me directly.'
            ]);
        }
    }
}
