
<main id = "all">
    <section class="cc" id = "interactable">
        <h1>Color Coordinate Generation</h1>
        <table id="firstTbl"></table>
            <script type="text/javascript">
                const body = document.getElementsByClassName("cc");

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

                
                tbl2 = document.createElement('table');
                tbl2.style.border = '1px solid black';
                for (var i = 0; i < rc; i++) {
                    const tr = tbl2.insertRow();
                    for (var j = 0; j < rc; j++) {
                        if (i == 0 && j == 0) {
                            const td = tr.appendChild(document.createTextNode(""));
                        } else if (i == 0) {
                            const td = tr.appendChild(document.createTextNode(String.fromCharCode('A'.charCodeAt() + (i - 1))));
                        } else if (i != 0 && j == 0) {
                            const td = tr.appendChild(document.createTextNode("" + i));
                        } else {
                            const td = tr.appendChild(document.createTextNode(""));
                        }
                        
                    }
                }

                body.appendChild(tbl2);
                
                function set_style(id, attr, value) {
                    var item = document.getElementById(id);
                    item.style[attr] = value;
                }
                function get_style (id, attr) {
                    return document.getElementById(id).style[attr];
                }

                function generate_view() {
                    document.getElementById("all").style.filter = "grayscale(100%)";
                    document.getElementById("all").disabled = true;
                }
            </script>

            <button class="button_one" onclick="generate_view();">
                Print
            </button>
    </section>
</main>
