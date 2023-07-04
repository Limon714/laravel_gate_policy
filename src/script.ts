class Player {
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
const rana = new Player("Rana", 30, " Batting");
const Rahim = new Player("Ar.Rahim", 30, " Batting");

const Players : Player[] = [];

Players.push(rana)
Players.push(Rahim)

console.log(rana.age)
console.log(Rahim.role)