
 let boardletter = document.querySelector(".letters");
 let boardnumbes = document.querySelector(".numbers");
 let letters = ['A','B','C','D','E','F','G','H'];
 let index=0;
 let num =1;
 const pieces = {
     K:"♔", Q:"♕", R:"♖", B:"♗", N:"♘", P:"♙",
     k:"♚", q:"♛", r:"♜", b:"♝", n:"♞", p:"♟",
 }


 let dir = "images/pieces/Bk.svg";
 get_fen_to_html()
 function get_fen_to_html(){
      tag = document.getElementById("fen").value
         .trim().replace(/\s+.*/,"")
         .replace(/\d+/g,n =>" ".repeat(n))
          .replace(/./g, char => "<td>" + (pieces[char]  || char))
         .replace(/^|<td>\//g,"\n </tr>");
     tag = "<table class=\"character\">" + tag + "\n</table>";

     for(let i =0; i<8; i++){

             tag = "<table class=\"character\">" + tag + "\n</table>";
             let letter = document.createElement('li');
             letter.textContent = letters[i];
             boardletter.appendChild(letter);
             let numbers = document.createElement('li');
             numbers.textContent = num++;
             boardnumbes.appendChild(numbers);

     }

     document.getElementById("out").innerHTML = tag;

 }
 
 var directory = 'images/pieces/';


