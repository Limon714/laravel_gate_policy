let calculation : (a: number, b:number, c:string)=> number;

calculation =(a: number, b:number, c:string)=>{
    if(c === "add"){
        return a + b ;
    }else{
        return a - b ;
    }
    
}

console.log(calculation(91, 75, "minus"));
