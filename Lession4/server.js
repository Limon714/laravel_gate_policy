const http = require("http");
const port = 3000;
const hostname = "127.0.0.1";
const hello = http.createServer((req, res) => {
    res.writeHead(202, { 'Content-Type':'text/html' });
    res.write("<h1>Hello Bangladesh</h1>");
    res.end();
});
hello.listen(port, hostname, () => {
  console.log(`my Server successfully running on http://${hostname}:${port}`);
});
