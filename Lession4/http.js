const http = require('http');
const port = 3000;
const hostname = "localhost"
const hello = http.createServer((req, res) => {
    
    res.end('Hello I am your first Server running');
});
hello.listen(port, hostname, () => {
    console.log(`my Server successfully running on http://${hostname}:${port}`);
});