<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $slot }}</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Gunakan font Inter -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            @apply bg-gray-50 text-gray-800;
        }

        /* Style untuk modal overlay agar transparan dan backdrop-blur */
        .modal-overlay {
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
