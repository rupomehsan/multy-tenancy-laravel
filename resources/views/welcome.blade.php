<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaaS Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="gradient-bg text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">SaaS Product</h1>
            <nav>
                <a href="#features" class="text-lg hover:text-gray-300 mx-2">Features</a>
                <a href="#pricing" class="text-lg hover:text-gray-300 mx-2">Pricing</a>
                <a href="#testimonials" class="text-lg hover:text-gray-300 mx-2">Testimonials</a>
                <a href="/login" class="bg-white text-indigo-600 font-bold py-2 px-4 rounded-full hover:bg-gray-200 transition duration-300">Sign In</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg text-white text-center py-20">
        <div class="container mx-auto">
            <h2 class="text-5xl font-extrabold mb-4">The Future of Productivity is Here</h2>
            <p class="text-xl mb-8">Streamline your workflow and boost your efficiency with our cutting-edge solution.</p>
            <a href="/register" class="bg-white text-indigo-600 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Get Started for Free</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-12">Why You'll Love Our Product</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="p-8 bg-gray-50 rounded-lg shadow-lg">
                    <h4 class="text-2xl font-bold mb-4">Seamless Integration</h4>
                    <p>Connect with your favorite tools and services in just a few clicks.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-lg shadow-lg">
                    <h4 class="text-2xl font-bold mb-4">Advanced Analytics</h4>
                    <p>Gain valuable insights with our powerful and intuitive analytics dashboard.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-lg shadow-lg">
                    <h4 class="text-2xl font-bold mb-4">24/7 Support</h4>
                    <p>Our dedicated support team is always here to help you succeed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-12">Choose Your Plan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-white p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <h4 class="text-2xl font-bold mb-4">Basic</h4>
                    <p class="text-5xl font-extrabold mb-6">$19<span class="text-lg font-medium">/mo</span></p>
                    <ul class="text-left mb-8">
                        <li class="mb-2">✓ Feature 1</li>
                        <li class="mb-2">✓ Feature 2</li>
                        <li class="mb-2">✗ Feature 3</li>
                    </ul>
                    <a href="/register?plan=basic" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full hover:bg-indigo-700 transition duration-300">Choose Plan</a>
                </div>
                <!-- Pro Plan -->
                <div class="bg-white p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 border-4 border-indigo-600">
                    <h4 class="text-2xl font-bold mb-4">Pro</h4>
                    <p class="text-5xl font-extrabold mb-6">$49<span class="text-lg font-medium">/mo</span></p>
                    <ul class="text-left mb-8">
                        <li class="mb-2">✓ Feature 1</li>
                        <li class="mb-2">✓ Feature 2</li>
                        <li class="mb-2">✓ Feature 3</li>
                    </ul>
                    <a href="/register?plan=pro" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full hover:bg-indigo-700 transition duration-300">Choose Plan</a>
                </div>
                <!-- Enterprise Plan -->
                <div class="bg-white p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                    <h4 class="text-2xl font-bold mb-4">Enterprise</h4>
                    <p class="text-5xl font-extrabold mb-6">Contact Us</p>
                    <ul class="text-left mb-8">
                        <li class="mb-2">✓ All Pro Features</li>
                        <li class="mb-2">✓ Dedicated Support</li>
                        <li class="mb-2">✓ Custom Integrations</li>
                    </ul>
                    <a href="#contact" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full hover:bg-indigo-700 transition duration-300">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-12">What Our Customers Say</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <p class="text-lg mb-4">"This product has transformed the way we work. It's intuitive, powerful, and has saved us countless hours."</p>
                    <p class="font-bold">- Jane Doe, CEO of ExampleCorp</p>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <p class="text-lg mb-4">"I can't imagine going back to our old workflow. The support team is also fantastic!"</p>
                    <p class="font-bold">- John Smith, CTO of Innovate Inc.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="gradient-bg text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 SaaS Product. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
