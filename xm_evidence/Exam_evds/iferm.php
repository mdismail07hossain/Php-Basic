<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>document</title>
</head>
<body class="bg-gray-100 h-screen">
  <div class="flex h-full">
    <!-- Sidebar -->
    <div class="w-64 bg-teal-900 text-white flex flex-col">
      <div class="p-4 text-center text-xl font-bold border-b border-gray-700">
        Menu bar
      </div>
      <nav class="flex-1">
        <ul class="space-y-2 p-4">
          <li>
            <a href="insert_b.php" target="content-frame"
              class="block p-2 rounded hover:bg-blue-700">
              Add Manufacturer
            </a>
          </li>
          <li>
            <a href="insert_p.php" target="content-frame"
              class="block p-2 rounded hover:bg-blue-700">
              Add Product
            </a>
          </li>
          <li>
            <a href="display.php" target="content-frame"
              class="block p-2 rounded hover:bg-blue-700">
              Delete Manufacturer
            </a>
          </li>
         
        </ul>
      </nav>
      
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-white">
      <iframe 
        name="content-frame" 
        class="w-full h-full border-none p-4"
        src="display.php">
      </iframe>
    </div>
  </div>
</body>
</html>
