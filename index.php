<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Dischi-JSON</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
    <script src="myscript.js" defer></script>
</head>

<body>
    <header></header>
    <main>
        <div class="container">
            <div id="app">
                <div class="card" v-for="card in arrDisc" :key="card.name">
                    {{ card.name }}
                </div>
            </div>
        </div>
    </main>
</body>

</html>