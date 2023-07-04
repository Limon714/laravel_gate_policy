export class Player {
    name : string;
    age: number;
    role:string;
    
    constructor(n:string, a:number, r:string){
        this.name = n;
        this.age = a;
        this.role = r;
    }
    
    play (){
        console.log(`${this.name} is ${this.age} good at ${this.role}`)
    }
    }