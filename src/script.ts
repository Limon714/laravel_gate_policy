import {Player} from "./classes/Player.js"
const rana = new Player("Rana", 30, " Batting");
const Rahim = new Player("Ar.Rahim", 30, " Batting");

const Players : Player[] = [];

Players.push(rana)
Players.push(Rahim)

console.log(rana.age)
console.log(Rahim.role)