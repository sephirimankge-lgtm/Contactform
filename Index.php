<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

// Check if the form was submitted
//if (isset($_POST["submit"])) {
     //Collect and sanitize form data
      $name = htmlspecialchars($_POST["name"]);
      $emailadrdress = htmlspecialchars($_POST["email"]);
      $phone = htmlspecialchars($_POST["phone"]);
      $topic = htmlspecialchars($_POST["topic"]); 
      $message = htmlspecialchars($_POST["message"]); 

  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      //$mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'sephiriworkplace@gmail.com';                     //SMTP username
      $mail->Password   = 'qwgovxrfrmsmwvas';                               //SMTP password
      $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` 
  
      //Recipients
      $mail->setFrom($_POST["email"], $_POST["name"] );
      $mail->addAddress('sephirimarobele@yahoo.com');     //Add a recipient
      //$mail->addAddress('ellen@example.com');               //Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      $mail->addCC('sephiri.mankge@gmail.com');
      //$mail->addBCC('bcc@example.com');
  
      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
  
      // Build the email body
      $mail->isHTML(true);  
      $mail->Subject = 'Mpilo New Enquiry';
      $email->Body = '<h3> Hello you have a new enquiry</h3>
        <h4>name:'.$name.'</h4>
        <h4>email:'.$emailaddress.'</h4>
        <h4>phone:'.$phone.'</h4>
        <h4>topic:'.$topic.'</h4>
        <h4>message:'.$message.'</h4>
        ';
          
        //$email= "Name: $name\n";
        //$email= "Email: $email\n";
        //$email= "Phone: $phone\n";
        //$email= "Topic: $topic\n";
        //$email= "Message: $message\n";
    
      if ($mail->send()){
        echo "Sent successfully.";
        exit;
        } else {
          echo :"Error has occurred";
          exit;
        }
      }
    
    if mail($email->Subject, $email->Body )
        //Redirect to a thank you page or show a success message
        echo : "message successfully sent";
        exit;
    } else {
        echo "An error occurred while sending your message. Please try again later.";
        exit;
    }
  }
//} else {
    // If the form wasn't submitted, redirect back to the contact form
    //header("Location: index.html");
    //echo "Not sent.";
    //exit;
//}
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Admissions</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 50%, #ec4899 100%);
        }
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img src="http://static.photos/education/200x200/1" alt="School Logo" class="h-12 w-12 rounded-full">
                    <span class="text-xl font-bold text-gray-800">Mpilo High</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.html" class="text-gray-600 hover:text-blue-600">Home</a>
                    <a href="about.html" class="text-gray-600 hover:text-blue-600">About</a>
                    <a href="academics.html" class="text-gray-600 hover:text-blue-600">Academics</a>
                    <a href="#admissions.html" class="text-gray-600 hover:text-blue-600">Admissions</a>
                    <a href="#" class="text-blue-600 font-medium"">Contact</a>
                </div>
                <button class="md:hidden focus:outline-none">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-12" data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Ready to be part of our world?</h2>
                    <p class="text-gray-600 mb-8">Fill out the form and we'll get back to you within 24 hours to discuss your interests and provide a detailed feedback.</p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i data-feather="mail" class="w-6 h-6 text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email Us</h4>
                                <p class="text-gray-600">sephiri.mankge@gmail.com.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i data-feather="phone" class="w-6 h-6 text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Call Us</h4>
                                <p class="text-gray-600">076 589 7650</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i data-feather="clock" class="w-6 h-6 text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Business Hours</h4>
                                <p class="text-gray-600">Monday - Friday: 9am - 6pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <form class="bg-gray-50 p-8 rounded-lg shadow-sm">
                    <form action="index.php" method="POST">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="John Doe" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="john@example.com" required>
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="(123) 456-7890">
                        </div>
                        <div class="mb-6">
                            <label for="topic" class="block text-gray-700 font-medium mb-2">Interest Subject</label>
                            <select id="topic" name="topic" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">Select a Grade</option>
                                <option value="admissons">Admissions</option>
                                <option value="complaints">Complaints</option>
                                <option value="appreciation">Appreciation</option>
                                <option value="general enquiries">General Enquiries</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" name="submit" class="w-full px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
