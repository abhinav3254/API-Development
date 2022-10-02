const express = require('express');
const path = require('path');
require('./db-config');
const app = express();
const listenPort = 4500;

console.log(path.join(__dirname, '../public'));

const staticPath = path.join(__dirname, '../public');
app.use(express.static(staticPath))

app.get('/', (req, res) => {
    res.send('Hello');
});

app.listen(listenPort);