<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        

        <style>
            /* Common CSS styles for authentication pages */

            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f3f4f6;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                color: #374151;
            }

            .x-auth-card {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                padding: 30px;
                width: 100%;
                max-width: 400px;
                box-sizing: border-box;
                border: 1px solid #e5e7eb;
            }

            .x-label {
                display: block;
                font-weight: 600;
                margin-bottom: 8px;
                color: #111827;
            }

            .x-input {
                width: 100%;
                padding: 12px;
                border: 1px solid #d1d5db;
                border-radius: 4px;
                box-sizing: border-box;
                margin-bottom: 20px;
                font-size: 16px;
                color: #374151;
            }

            .x-input:focus {
                border-color: #3b82f6;
                outline: none;
                box-shadow: 0 0 0 1px #3b82f6;
            }

            .x-button {
                display: inline-block;
                background-color: #3b82f6;
                color: #ffffff;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                transition: background-color 0.3s, transform 0.3s;
                font-size: 16px;
                font-weight: 600;
            }

            .x-button:hover {
                background-color: #2563eb;
                transform: translateY(-2px);
            }

            .text-gray-600 {
                color: #4b5563;
            }

            .text-gray-900 {
                color: #111827;
            }

            .underline {
                text-decoration: underline;
                color: #2563eb;
            }

            .mb-4 {
                margin-bottom: 20px;
            }

            .mt-1 {
                margin-top: 4px;
            }

            .mt-4 {
                margin-top: 16px;
            }

            .flex {
                display: flex;
            }

            .items-center {
                align-items: center;
            }

            .justify-end {
                justify-content: flex-end;
            }

            .text-sm {
                font-size: 14px;
            }

            @media (max-width: 640px) {
                .x-auth-card {
                    padding: 20px;
                    width: 90%;
                }

                .x-button {
                    width: 100%;
                    padding: 14px;
                }
            }

        </style>

    </head>
    
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>

</html>
