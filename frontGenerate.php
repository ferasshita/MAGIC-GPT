<?php
include('config/connect.php');

$pid = filter_input(INPUT_GET, 'pid', FILTER_SANITIZE_STRING);

if (empty($pid)) {
    header('Location: index');
    exit;
}


$query = mysqli_query($conn, "SELECT * FROM websites WHERE id = '$pid'");

if (!$query) {
    die("MySQL Error: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($query)) {
    $appName = $row['appName'];
    $appDescription = $row['appDescription'];
    $appAuthor = $row['appAuthor']; // Assuming 'appAuthor' is a valid column name
    $appColor = $row['appColor'];
    $zip = $row['zip'];
    $logs = $row['logs'];
    $folder = $row['folder'];
}

if($appName == NULL){
  header('Location: index');
exit();
}
// Close the database connection if needed
   ?>
<!DOCTYPE html>
<body>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="media/logo.png">
    <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">

    <link rel="manifest" href="/manifest.json">

    <meta property="og:title" content="MAGIC - GPT Web App Generator ✨">
    <meta property="og:description"
          content="Generate your full-stack web app in PHP & CodeIgniter using the magic of GPT.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://usemage.ai/twitter.png">
    <meta name="twitter:image" content="https://usemage.ai/twitter.png">
    <meta name="twitter:image:width" content="800">
    <meta name="twitter:image:height" content="400">
    <meta name="twitter:card" content="summary_large_image">

    <script src="js_back/jquery.min.js"></script>
    <script src="js_back/jquery.form.min.js"></script>
    <script src="js_back/bootstrap.min.js"></script>
    <script src="js_back/code.js"></script>
    <script type="text/javascript" src="js_back/jquery.maxlength.js"></script>


    <title>MAGIC - GPT Web App Generator ✨</title>
    <script type="module" crossorigin="" src="media/front.js"></script>
    <script src="media/code.js"></script>
    <link rel="stylesheet" href="media/style.css">

<style>
.file-list,
.file-list ul {
  list-style-type: none;
  font-size: 1em;
  line-height: 1.8em;
  margin-left: 20px;
  padding-left: 18px;
  border-left: 1px dotted #aaa;
}
.file-list li {
  position: relative;
  padding-left: 25px;
}

.file-list li span {
  text-decoration: none;
  cursor: pointer;
}

.file-list li span:before {
  display: block;
  content: ' ';
  width: 10px;
  height: 1px;
  position: absolute;
  border-bottom: 1px dotted #aaa;
  top: 0.6em;
  left: -14px;
}
.file-list li:before {
  list-style-type: none;
  font-family: FontAwesome;
  display: block;
  content: url('../icons/file.svg');
  position: absolute;
  top: 0;
  left: 0;
  width: 20px;
  height: 20px;
  font-size: 1.3em;
  color: #555;
}
.file-list .folder-root {
  list-style-type: none;
}

.file-list .folder-root:before {
  content: url('./icons/folder_close.svg');
}
.file-list .folder-root.open:before {
  content: url('./icons/folder_open.svg');
}
li.folder-root ul {
  transition: all 0.2s ease-in-out;
  overflow: hidden;
}
li.folder-root.closed > ul {
  opacity: 0;
  max-height: 0;
}
li.folder-root.open > ul {
  opacity: 1;
  display: block;
  max-height: 1000px;
}
@media (max-width: 768px) {
    .grid {
        display: block;
    }
}
@media screen and (max-width: 1024px) and (min-width: 768px) {
  .file-list,
  .file-list ul {
    margin-left: 3px;
    padding-left: 13px;
  }
}
</style>
</head>
<body>

<noscript>You need to enable JavaScript to run this app.</noscript>
<div><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="container">
            <div class="mb-4 bg-slate-50 p-8 rounded-xl md:flex justify-between items-center"><div>
                    <div class="flex justify-flex-start items-center">
                        <a href="index">
                            <img src="media/logo.png" alt="wasp" class="w-20"></a>
                        <div class="text-xl md:text-2xl font-bold text-slate-800 ml-4">
                            <h1>MAGIC ✨ GPT Web App Generator</h1>
                            <p class="md:text-base text-sm leading-relaxed text-gray-500">Generate your full-stack web
                                app in PHP & CodeIgniter </p>
                            <a href="projects" class="flex items-center mt-2 space-x-1 text-gray-500 hover:text-gray-400">
                                <span class="text-sm font-normal">Learn more</span>
                                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 15 15" class="text-base" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.877075 7.49972C0.877075 3.84204 3.84222 0.876892 7.49991 0.876892C11.1576 0.876892 14.1227 3.84204 14.1227 7.49972C14.1227 11.1574 11.1576 14.1226 7.49991 14.1226C3.84222 14.1226 0.877075 11.1574 0.877075 7.49972ZM7.49991 1.82689C4.36689 1.82689 1.82708 4.36671 1.82708 7.49972C1.82708 10.6327 4.36689 13.1726 7.49991 13.1726C10.6329 13.1726 13.1727 10.6327 13.1727 7.49972C13.1727 4.36671 10.6329 1.82689 7.49991 1.82689ZM8.24993 10.5C8.24993 10.9142 7.91414 11.25 7.49993 11.25C7.08571 11.25 6.74993 10.9142 6.74993 10.5C6.74993 10.0858 7.08571 9.75 7.49993 9.75C7.91414 9.75 8.24993 10.0858 8.24993 10.5ZM6.05003 6.25C6.05003 5.57211 6.63511 4.925 7.50003 4.925C8.36496 4.925 8.95003 5.57211 8.95003 6.25C8.95003 6.74118 8.68002 6.99212 8.21447 7.27494C8.16251 7.30651 8.10258 7.34131 8.03847 7.37854L8.03841 7.37858C7.85521 7.48497 7.63788 7.61119 7.47449 7.73849C7.23214 7.92732 6.95003 8.23198 6.95003 8.7C6.95004 9.00376 7.19628 9.25 7.50004 9.25C7.8024 9.25 8.04778 9.00601 8.05002 8.70417L8.05056 8.7033C8.05924 8.6896 8.08493 8.65735 8.15058 8.6062C8.25207 8.52712 8.36508 8.46163 8.51567 8.37436L8.51571 8.37433C8.59422 8.32883 8.68296 8.27741 8.78559 8.21506C9.32004 7.89038 10.05 7.35382 10.05 6.25C10.05 4.92789 8.93511 3.825 7.50003 3.825C6.06496 3.825 4.95003 4.92789 4.95003 6.25C4.95003 6.55376 5.19628 6.8 5.50003 6.8C5.80379 6.8 6.05003 6.55376 6.05003 6.25Z" fill="currentColor"></path></svg></a></div></div></div>
                                    <div id="instraction" class="flex items-center hidden md:flex">
                                      <?php if($folder == NULL || !is_dir($folder)){ ?>
                                    <span class="text-center inline-flex items-center rounded-lg shadow-md bg-yellow-100 text-orange-700 py-2 pl-3 pr-4"><span class="w-1.5 h-1.5 rounded-full mr-2 bg-current"></span>Processing instructions</span>
                            <?php }else{ ?>
                              <span class="text-center inline-flex items-center rounded-lg shadow-md bg-green-100 text-green-700 py-2 pl-3 pr-4"><span class="w-1.5 h-1.5 rounded-full mr-2 bg-current"></span>Finished</span>
                            <?php } ?>
                </div></div>
            <header class="relative big-box-dark">
                <div class="absolute inset-0 bg-green-500 opacity-[.15] z-0"></div>
                <div class="relative"><div class="block md:hidden mb-4 z-10">
                        <button onclick="generate()" class="p-2 px-4 rounded-full bg-slate-700 hover:bg-slate-600 text-slate-300">Expand the logs</button>
                    </div>
                </div>
                <div class="flex justify-between items-flex-start">
                    <div class="flex-shrink-0 mr-3 mb-2 self-end">
                    </div>
                    <pre class="flex-1 overflow-x-auto z-10">
                        <pre id="log" class="mb-2" style="opacity: 1;">
<?php
if($logs != NULL){
foreach (array($logs) as $log) {
  if($log == "Done!"){
    echo "Done! <button onclick=\"generate()\" class=\"button gray xs\">Retry</button> \n";
  }else{
    echo $log;
  }
}}else{
echo "Processing ...";
} ?>
</pre>
                    </pre>
                    <div class="flex-shrink-0 ml-3 hidden md:block z-10">
                        <button onclick="generate()" class="p-2 px-4 rounded-full bg-slate-700 hover:bg-slate-600 text-slate-300">Retry</button>
                    </div>
                </div>
            </header>
            <div class="overflow-hidden
          flex-row
          space-x-3
          "></div><div class="mb-2 flex items-center justify-between"><h2 class="text-xl font-bold text-gray-800"><?php echo $appName; ?></h2></div><button class="button gray block w-full mb-4 md:hidden">Open file browser (11 files)</button>
          <div class="grid gap-4 md:grid-cols-[320px_1fr] mt-4 overflow-x-auto md:overflow-x-visible">
                        <div class="mb-2">
                          <a href="ai/<?php echo $zip; ?>" download><button class="button flex items-center justify-center gap-1 w-full animate-jumping" <?php if($zip == NULL){echo "disable";} ?>>Download zip <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="inline-block" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M216,72V176H40V72A16,16,0,0,1,56,56H200A16,16,0,0,1,216,72Z" opacity="0.2"></path><path d="M232,168h-8V72a24,24,0,0,0-24-24H56A24,24,0,0,0,32,72v96H24a8,8,0,0,0-8,8v16a24,24,0,0,0,24,24H216a24,24,0,0,0,24-24V176A8,8,0,0,0,232,168ZM48,72a8,8,0,0,1,8-8H200a8,8,0,0,1,8,8v96H48ZM224,192a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8v-8H224ZM152,88a8,8,0,0,1-8,8H112a8,8,0,0,1,0-16h32A8,8,0,0,1,152,88Z"></path></svg>
                          </button></a>
                        </div>
                          <div>
                            <button class="button light-blue flex items-center justify-center gap-1 w-full mb-2"><span>Copy a shareable link <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="inline-block" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M216,40V168H168V88H88V40Z" opacity="0.2"></path><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32ZM160,208H48V96H160Zm48-48H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg></span>
                            </button>
                          </div>
                          <?php
                          $query = mysqli_query($conn, "SELECT folder FROM websites WHERE id = '$pid'");

                          while ($row = mysqli_fetch_array($query)) {
                              $folder = $row['folder'];
        }
                          ?>
                        <?php if($folder == NULL || !is_dir($folder)){ ?>
                        <div class="flex big-box-dark" style="width:100%">
                          wait for the files to be processed
                        </div>
                      <?php }else{ ?>
<aside>
  <div class="directory">
  <ul id="file-tree" class="file-tree">

        <?php
        function getFolderContents($dir) {
          ob_start();

            $contents = scandir($dir);

            foreach ($contents as $item) {
                if ($item !== "." && $item !== "..") {
                    $itemPath = $dir . '/' . $item;

                    if (is_dir($itemPath)) {?>
                      <li>
                      <span class="folder-name">
                        <div class="tree-node tree-node--expanded tree-node__branch" style="padding-left: calc(0.5rem + 0px);"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" color="e8a87c" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(232, 168, 124);"><path d="M527.9 224H480v-48c0-26.5-21.5-48-48-48H272l-64-64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h400c16.5 0 31.9-8.5 40.7-22.6l79.9-128c20-31.9-3-73.4-40.7-73.4zM48 118c0-3.3 2.7-6 6-6h134.1l64 64H426c3.3 0 6 2.7 6 6v42H152c-16.8 0-32.4 8.8-41.1 23.2L48 351.4zm400 282H72l77.2-128H528z"></path></svg>
                          <?php echo "$item"; ?></div>
                        </span>
                        <ul>
                      <?php
                        echo getFolderContents($itemPath);
                    } else {
                        echo "<li><span onclick=\"getFileContent('$itemPath')\">$item</span></li>";
                    }
                    if (is_dir($itemPath)) {
                      echo "</li></ul>";
                    }
                }
            }

            return ob_get_clean();
        }

        echo getFolderContents('ai/download/'.$folder); ?>

      </ul>

    </div>
</aside>

                    <main class="">

                <div id="folders">
                  <section class='code-editor'>
    <div class='controls'>
      <i class="fa fa-expand fullscreen"></i>
      <i class="fa fa-chevron-up accordion"></i>
    </div>

    <pre class='line-numbers'>
      <code id="code_source" style="height:510px;display:flex" class='language-scss'>
      </code>
    </pre>
  </section>
  <script>
  function getFileContent(path){
    $.ajax({
        type:'POST',
        url:'function',
        data:{'path':path},
        success: function(done){
                $('#code_source').html(done);
        }
    });
  }
  getFileContent('ai/download/<?php echo $folder; ?>/.env')
  </script>
  </section>
            <?php } ?>
          </div>
        </main>

            </div>
            <p class="text-gray-500 text-sm my-4 leading-relaxed hidden md:block">
                    <strong>User provided prompt: </strong><?php echo $appDescription; ?></p>

    <script>
      function generate(){
    $(document).ready(function() {
          const contentDiv = $("#log");
          const instructionDiv = $("#instraction");
          contentDiv.html("");
          // Show processing instructions before the event
          instructionDiv.html("<span class=\"text-center inline-flex items-center rounded-lg shadow-md bg-yellow-100 text-orange-700 py-2 pl-3 pr-4\"><span class=\"w-1.5 h-1.5 rounded-full mr-2 bg-current\"></span>Processing instructions</span>");

          const eventSource = new EventSource("ai/form?pid=<?php echo $pid; ?>"); // Send "pid" as a query parameter

          eventSource.onmessage = function(event) {
              const data = event.data;
              contentDiv.append(data + "<br>");
          };

          eventSource.onerror = function(error) {
              console.error("SSE failed:", error);
              eventSource.close();
          };

          // Add this code to hide the processing instructions after the event finishes
          eventSource.addEventListener('message', function(event) {
              if (event.data === "Event finished") {
                  // Update the instructions when the "Event finished" message is received
                  instructionDiv.html("<span class=\"text-center inline-flex items-center rounded-lg shadow-md bg-green-100 text-green-700 py-2 pl-3 pr-4\"><span class=\"w-1.5 h-1.5 rounded-full mr-2 bg-current\"></span>Finished</span>");
                  $("#folders").load(location.href + " #folders");
              }
          });
      });
    }
    <?php if($folder == NULL){ ?>
    generate();
    <?php } ?>
    </script>
    <div id="folder-tree">


          <!-- example end-->

           <!-- import and initialize fileTree function -->

    </div>
      <div id="file-content"></div>


            <p class="text-gray-500 text-sm my-4 leading-relaxed md:hidden"><strong>User provided prompt: </strong><?php echo $appDescription; ?></p>

</div><footer class="mt-8"><p class="text-center text-slate-800">This is an experiment by <a href="" target="_blank" rel="noopener noreferrer" class="text-sky-500 hover:text-sky-600">Feras Shita</a></p><p class="text-center text-slate-500 text-sm mt-2">This whole app is open-source, you can find the code <a href="" target="_blank" rel="noopener noreferrer" class="text-sky-500 hover:text-sky-600">here</a>.</p></footer></div></div>
<script>
function fileTree(elementId) {
NodeList.prototype.has = function(selector) {
return Array.from(this).filter(e => e.querySelector(selector));
};

var element = document.getElementById(elementId);
element.classList.add('file-list');
var liElementsInideUl = element.querySelectorAll('li');
liElementsInideUl.has('ul').forEach(li => {
li.classList.add('folder-root');
li.classList.add('closed');
var spanFolderElementsInsideLi = li.querySelectorAll('span.folder-name');
spanFolderElementsInsideLi.forEach(span => {
if (span.parentNode.nodeName === 'LI') {
span.onclick = function(e) {
span.parentNode.classList.toggle('open');
};
}
});
});
}
</script>
<script type="text/javascript">
  window.onload = function() {
    // passing element id to fileTree
    fileTree('file-tree');
  };
</script>

</body>
</html>
