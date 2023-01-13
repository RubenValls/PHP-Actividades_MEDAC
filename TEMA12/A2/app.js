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
let count = 1;
let query = 'SELECT titulo, año_entrada, cantidad_disponible FROM biblioteca WHERE año_entrada > 2019'
connection.query(query, function (error, results, fields) {
    if (error)
        throw error;

    results.forEach(result => {
        info.push([`<h3>Book number ${count}</h3><h4>Title: ${result.titulo}</h4>` + `<h4>Year: ${result.año_entrada}</h4>` +`<h4>Available: ${result.cantidad_disponible}</h4><br>`]);
        count++;
    });
});

const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
    res.send(`<h3 style="text-align: center">Query: ${query} and Info:</h3><hr><div style="text-align: center">${info}</div>`)
})

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})

connection.end();