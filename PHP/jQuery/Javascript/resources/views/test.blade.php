<?php


<div class=" bg-white p-5">
        <h1 class="text-center">FEN Display Tool</h1>
    </div>
     <div class=" min-h-screen bg-gray-100  p-5">

         <div class=" space-y-10  lg:grid lg:grid-cols-2">
            <!-- left-->
            <div class="lg:flex lg:flex-col lg:justify-center">
                <div class=" w-full h-64 rounded-lg  text-center  mt-10">
                   {{-- <div class="upperdiv">
                        <div class="numbers"></div>
                        <div class="letters"></div>
                        <div class="board"></div>
                    </div>--}}
                    <div id="out"></div>
                {{-- <table class=" pl-10 mx-auto ">
                @php
                     for($row=1;$row<=8; $row++){

                         echo  "<tr>";
                         for($col=1; $col<=8; $col++){
                             if(($row + $col) % 2==0){

                                 echo "<td class='bg-cyan-600 w-10 h-10' >1 </td>";

                             }else{
                                 echo "<td class='bg-white w-10 h-10'> </td>";
                             }
                         }
                         echo "</tr>";
                     }
                     @endphp


                     </table>--}}
                        <ul>
                            <li id="tes">{{$data->fen_char}}</li>
                        </ul>

                </div>
            </div>
             <div class=" ">
                 <div class=" w-1/2 h-64 rounded-lg  lg:text-center  ">
                     <button    class="bg-cyan-700  mt-5 text-white rounded-lg  pt-2 pb-2 pl-7 pr-7"    > <a href="{{ route('fen',['fen'=> trim($data->fen_char)])}}">NY FEN</a>
                     </button>

               <input  onkeyUp="get_fen_to_html()"  type="hidden" id="fen"  value="{{$data->fen_char}}"/>


                 </div>
             </div>
             <!-- right-->

         </div>



    </div>
