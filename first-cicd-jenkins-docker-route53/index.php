<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purushottam Dike SRE</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes wave {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body class="bg-abcdbb flex items-center justify-center min-h-screen m-0">
    <div class="card-container bg-231E39 rounded-lg shadow-lg text-B3B8CD p-8 relative w-full max-w-md mx-auto text-center">
        <div class="bg-gradient-to-r from-blue-500 via-green-500 to-purple-500 w-full h-5 absolute top-0 left-0 animate-wave duration-3000 ease-in-out infinite"></div>
        <img class="round w-48 h-48 mx-auto mb-4 border-2 border-03BFCB rounded-full" src="https://github.com/psdike/maven-web/blob/master/psd.jpg?raw=true" alt="user" />
        <h3 class="text-xl mb-2">Purushottam Dike</h3>
        <h6 class="text-sm mb-2 uppercase">Reliable DevOps</h6>
        <p class="text-sm mb-4">SRE @ N7<br/></p>
        <div class="buttons mb-8">
            <button class="primary bg-03BFCB border-2 border-03BFCB rounded-md text-231E39 font-semibold py-2 px-6 mr-2" onclick='window.location="https://www.linkedin.com/in/purushottam-dike/"'>
                LinkedIn
            </button>
            <button class="primary ghost bg-transparent text-02899C border-2 border-03BFCB rounded-md font-semibold py-2 px-6" onclick='window.location="https://www.linkedin.com/in/purushottam-dike/"'>
                Follow
            </button>
        </div>
        <div class="skills bg-1F1A36 text-left p-4 rounded-md">
            <h6 class="text-sm mb-2 uppercase">Skills</h6>
            <ul class="flex flex-wrap list-none m-0 p-0">
				<li class="bg-2D2747 text-xs rounded-md m-1 p-2">Kubernetes</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">GCP/AWS/AZURE</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">Docker</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">Ansible</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">Jenkins</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">Git</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">GitHub</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">Linux RHCE</li>
                <li class="bg-2D2747 text-xs rounded-md m-1 p-2">Terraform</li>
            </ul>
        </div>
		<div class="bg-gradient-to-r from-blue-500 via-green-500 to-purple-500 w-full h-5 absolute bottom-0 right-0 animate-wave duration-3000 ease-in-out infinite"></div>
    </div>
</body>
</html>
