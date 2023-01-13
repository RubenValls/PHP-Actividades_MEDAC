var mysql      = require('mysql');
var connection = mysql.createConnection({
    host     : 'localhost',
    database : 't2act2',
    user     : 'root',
    password : '',
});
connection.connect(function(err) {
    if (err) {
        console.error('Error connecting: ' + err.stack);
        return;
    }

    console.log('Connected as id ' + connection.threadId);
});

let info = [];
let query = 'SELECT titulo, año_entrada, cantidad_disponible FROM biblioteca WHERE año_entrada > 2019'
connection.query(query, function (error, results, fields) {
    if (error)
        throw error;

    results.forEach(result => {
        info.push([result.titulo, result.año_entrada, result.cantidad_disponible, " <br> "]);
    });
});

const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
    res.send(`<h3 style="text-align: center">Query: ${query} and Info: <hr> ${info}</h3>`)
})

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})

connection.end();