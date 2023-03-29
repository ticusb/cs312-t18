
<main id="all">
    <section class="cc">
        <div id="overlay"></div>
        <div id="printpage"></div>
        <h1>Color Coordinate Generation</h1>
        <table id="firstTbl">
            <script type="text/javascript">
                const queryString = window.location.search;
                const urlParams = new URLSearchParams(queryString);
                let rows = urlParams.get('rows/cols');

                let tbl = document.getElementById("firstTbl");
                console.log(rows);
                for(let i = 0; i < rows; i++) {
                    var newRow = tbl.insertRow();
                    for(let j = 0; j < rows; j++){
                        var cell = newRow.insertCell();
                    }
                }


                function set_style(id, attr, value){
                    var item = document.getElementById(id);
                    item.style[attr] = value;
                }
                function get_style (id, attr) {
                    return document.getElementById(id).style[attr];
                }

                function generate_view() {
                    // window.print();
                    set_style("overlay", "z-index", "100");
                    set_style("overlay", "opacity", "0.8");
                    set_style("printpage", "z-index", "101");
                    
                }
                function generate_view() {
                    document.getElementById("all").style.filter = "grayscale(100%)";
                }
            </script>




        </table>
        <button class="button_one" onclick="generate_view();"> Print </button>

    </section>
</main>
