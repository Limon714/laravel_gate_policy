const fs = require('fs');

fs.appendFile("hello.js", "I love Nowrin", (err) => {
    if (err) {
        console.log(err)
    } else {
        console.log("Successful");
    }
});