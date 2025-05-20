<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <title>LinkTree</title>
    <style>

        .h {
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
        body{
            background-color: #000000;
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .custom-btn {
            background-color:#1c1c1c;
            color: white;
            border: 2px solid #1c1c1c;
            transition: all 0.3s ease;
        }
        .custom-btn:hover{
            opacity: 0.2;
            transition: all 0.3s ease;
        }
        .custom-up:hover{
            opacity: 0.2;
            transition: all 0.3s ease;
        }
        .custom-icon:hover{
            transform: scale(1.08);
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
            transition: all 0.1s ease;
        }
    </style>
</head>
<body>
    <div class="mx-auto" style="width: 580px;height: 1200px;">
        <div class="d-flex justify-content-end p-2 m-3">
            <button class="text-white bg- border-0 rounded-circle border-transparent px-2 py-1" style="width: 40px; height: 40px;background-color: rgba(0, 0, 0, 0.1);">
                <i class="bi bi-three-dots"></i>
            </button>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center text-center">
            <img src="Assets/profpic.webp" alt="" class="rounded-circle" style="width: 96px;height: 96px; margin-bottom: 16px;">
            <h1 style="color: #ffffff;font-size: large;">Link Page</h1>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center mt-4">
            <a href="https://www.youtube.com/@bricksdept" class="mx-2 custom-icon" target="_blank">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                    <path d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z"></path>
                </svg>
            </a>
            <a href="https://www.tiktok.com/@bricksdept" class="mx-2 custom-icon" target="_blank">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                    <path d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/bricksdept" class="mx-2 custom-icon" target="_blank">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                    <path d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z"></path>
                    <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
                    <path d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z"></path>
                </svg>
            </a>
            <a href="https://x.com/bricksdept" class="mx-2 custom-icon" target="_blank">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                    <path d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z"></path>
                </svg>
            </a>
        </div>
        <div class="d-flex flex-column justify-content-center mt-4">
            <a href="/index" target="_blank" class="btn custom-btn mt-3" style="background-color: #1c1c1c;">
                <div class="row py-2 px-2 text-white d-flex justify-content-between custom-btn1">
                    <img src="Assets/logo-rocket.png" width="40px" height="40px" class="rounded-lg ml-2">
                    <div class="my-auto" style="font-weight: 500;">index</div>
                    <button class="text-white border-0 rounded-circle border-transparent px-2 py-1" style="width: 40px; height: 40px;background-color: rgba(0, 0, 0, 0.0);">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </div>
            </a>
            <a href="/pertama" target="_blank" class="btn custom-btn mt-3" style="background-color: #1c1c1c;">
                <div class="row py-2 px-2 text-white d-flex justify-content-between custom-btn1">
                    <img src="Assets/logo-rocket.png" width="40px" height="40px" class="rounded-lg ml-2">
                    <div class="my-auto" style="font-weight: 500;"">pertama</div>
                    <button class="text-white border-0 rounded-circle border-transparent px-2 py-1" style="width: 40px; height: 40px;background-color: rgba(0, 0, 0, 0.0);">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </div>
            </a>
            <a href="/template1" target="_blank" class="btn custom-btn mt-3" style="background-color: #1c1c1c;">
                <div class="row py-2 px-2 text-white d-flex justify-content-between">
                    <img src="Assets/logo-rocket.png" width="40px" height="40px" class="rounded-lg ml-2">
                    <div class="my-auto" style="font-weight: 500;">template1</div>
                    <button class="text-white border-0 rounded-circle border-transparent px-2 py-1" style="width: 40px; height: 40px;background-color: rgba(0, 0, 0, 0.0);">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </div>
            </a>
            <a href="/linktree" target="_blank" class="btn custom-btn mt-3" style="background-color: #1c1c1c;">
                <div class="row py-2 px-2 text-white d-flex justify-content-between">
                    <img src="Assets/logo-rocket.png" width="40px" height="40px" class="rounded-lg ml-2">
                    <div class="my-auto" style="font-weight: 500;">linktree</div>
                    <button class="text-white border-0 rounded-circle border-transparent px-2 py-1" style="width: 40px; height: 40px;background-color: rgba(0, 0, 0, 0.0);">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </div>
            </a>
            <a href="/js1" target="_blank" class="btn custom-btn mt-3" style="background-color: #1c1c1c;">
                <div class="row py-2 px-2 text-white d-flex justify-content-between">
                    <img src="Assets/logo-rocket.png" width="40px" height="40px" class="rounded-lg ml-2">
                    <div class="my-auto" style="font-weight: 500;">js1</div>
                    <button class="text-white border-0 rounded-circle border-transparent px-2 py-1" style="width: 40px; height: 40px;background-color: rgba(0, 0, 0, 0.0);">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
