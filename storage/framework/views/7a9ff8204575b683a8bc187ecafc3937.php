<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wardrobe Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body style="font-family: 'Figtree', sans-serif; background-color: #f3f4f6; margin: 0; padding: 0;">
        <!-- Navigation Bar -->
        <nav style="background-color: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1rem 0;">
            <div style="max-width: 72rem; margin: 0 auto; padding: 0 1rem;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div style="font-size: 1.5rem; font-weight: bold; color: #4f46e5;">
                        My Wardrobe
                    </div>
                    <div style="display: flex; gap: 1rem;">
                        <a href="#" style="color: #374151; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#374151'">Home</a>
                        <a href="#" style="color: #374151; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#374151'">Add</a>
                        <a href="#" style="color: #374151; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#374151'">Edit</a>
                        <a href="#" style="color: #374151; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#374151'">Delete</a>
                        <a href="#" style="color: #374151; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#374151'">Login</a>
                        <a href="#" style="color: #374151; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#374151'">Register</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div style="max-width: 72rem; margin: 0 auto; padding: 2rem 1rem;">
            <div style="text-align: center;">
                <h1 style="font-size: 2.25rem; font-weight: bold; color: #4f46e5; margin-bottom: 1rem;">
                    Welcome to Your Wardrobe System!
                </h1>
                <p style="font-size: 1.125rem; color: #374151; margin-bottom: 2rem;">
                    Organize and manage your clothing items with ease.
                </p>
                <a href="#" style="background-color: #4f46e5; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#4338ca'" onmouseout="this.style.backgroundColor='#4f46e5'">
                    Get Started
                </a>
            </div>

            <!-- Example Clothing Grid -->
            <div style="margin-top: 3rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                <!-- Clothing Item 1 -->
                <div style="background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1.5rem;">
                    <h2 style="font-size: 1.25rem; font-weight: 600; color: #4f46e5; margin-bottom: 0.5rem;">Tops</h2>
                    <p style="color: #374151;">A comfortable and stylish t-shirt for everyday wear.</p>
                </div>

                <!-- Clothing Item 2 -->
                <div style="background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1.5rem;">
                    <h2 style="font-size: 1.25rem; font-weight: 600; color: #4f46e5; margin-bottom: 0.5rem;">Bottoms</h2>
                    <p style="color: #374151;">Classic denim jeans for a casual look.</p>
                </div>

                <!-- Clothing Item 3 -->
                <div style="background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1.5rem;">
                    <h2 style="font-size: 1.25rem; font-weight: 600; color: #4f46e5; margin-bottom: 0.5rem;">Shoes</h2>
                    <p style="color: #374151;">Nice Looking lether Shoes.</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer style="background-color: white; box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1); margin-top: 3rem;">
            <div style="max-width: 72rem; margin: 0 auto; padding: 1.5rem 1rem; text-align: center;">
                <p style="color: #374151;">&copy; 2025 Wardrobe Management System Sample. All rights reserved. #BY TOM MAETA AIKO.
                    N/B: This project is yet to be completed, such a nice experience exploring Laravel11 and Vue3
                </p>
            </div>
        </footer>
    </body>
</html><?php /**PATH /home/tommaeta/Desktop/Projects/wardrobe-system-app/resources/views/welcome.blade.php ENDPATH**/ ?>