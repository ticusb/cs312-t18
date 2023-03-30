<main id = "all">
    <section class="cc" id = "interactable">
        <h1>Color Coordinate Generation</h1>
        <div>
        <img src = "MTNLlogo.png">
        </div>
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
                for (var i = 0; i < rc + 1; i++) {
                    const tr = tbl2.insertRow();
                    for (var j = 0; j < rc + 1; j++) {
                        if (i == 0 && j == 0) {
                            const td = tr.insertCell().appendChild(document.createTextNode(""));
                        } else if (i == 0) {
                            const td = tr.insertCell().appendChild(document.createTextNode(String.fromCharCode('A'.charCodeAt() + (i - 1))));
                        } else if (j == 0) {
                            const td = tr.insertCell().appendChild(document.createTextNode("" + i));
                        } else {
                            const td = tr.insertCell().appendChild(document.createTextNode(""));
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
                
                let f = false;
                function generate_view() {
                    document.getElementById("all").style.filter = "grayscale(100%)";
                    document.getElementById("all").disabled = true;
                    document.getElementsByTagName("*").disabled = true;
                    

                }
            </script>
            <button class="button_one" onclick="generate_view();">
                Print
            </button>
    </section>
</main>