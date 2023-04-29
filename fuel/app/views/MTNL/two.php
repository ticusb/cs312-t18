<main id = "all">
    <section class="cc" id = "interactable">
        <h1>Color Coordinate Generation</h1>
        <table id="firstTbl"></table>
        <table id="secondTbl"></table>
            <script type="text/javascript">
                var colorList = [
                            {
                                hex: '#FF5733',
                                name: 'Red'
                            },
                            {
                                hex: '#FF8E00',
                                name: 'Orange'
                            },
                            {
                                hex: '#FFFF00',
                                name: 'Yellow'
                            },
                            {
                                hex: '#32CD32',
                                name: 'Green'
                            },
                            {
                                hex: '#008080',
                                name: 'Teal'
                            },
                            {
                                hex: '#4169E1',
                                name: 'Blue'
                            },
                            {
                                hex: '#800080',
                                name: 'Purple'
                            },
                            {
                                hex: '#964B00',
                                name: 'Brown'
                            },
                            {
                                hex: '#1f1f1f',
                                name: 'Black'
                            },
                            {
                                hex: '#808080',
                                name: 'Grey'
                            }
                            ];

                const body = document.getElementsByClassName("cc");

                const queryString = window.location.search;
                const urlParams = new URLSearchParams(queryString);

                let rows = urlParams.get('rows/cols');
                let columns = rows;
                let color = urlParams.get('color');

                let tbl = document.getElementById("firstTbl");

                let selectedColor = "";
                let selectedTemp = "";
                let coordinates = {};

                document.addEventListener("DOMContentLoaded", () => {

                
                for(let i = 0; i < color; i++) {
                    var newRow = tbl.insertRow();
                    let radioButtonCell = newRow.insertCell();
                    let colorPickerCell = newRow.insertCell();
                    let colorCell = newRow.insertCell();
                    colorCell.setAttribute('class', 'add-text');
                    let button = document.createElement("button");
                    button.innerHTML = "Set Current";
                    radioButtonCell.appendChild(button);
                    button.type = "radio";
                    button.name = "color";
                    button.id = "button_" + i;
                    button.setAttribute('class', 'button_list');
                    for(let j = 0; j < 2; j++){
                        if(j == 0){
                            let dropdown = document.createElement("select");
                            let defaultOption = document.createElement("option");
                            defaultOption.text = "Select a color";
                            defaultOption.disabled = true;
                            defaultOption.selected = true;
                            dropdown.add(defaultOption);
                            
                            for(let k = 0; k < (colorList.length); k++) {
                                let colorOption = document.createElement("option");
                                colorOption.value = colorList[k].hex;
                                colorOption.innerHTML = colorList[k].name;
                                dropdown.appendChild(colorOption);
                            } 
                            dropdown.addEventListener("change", function() {
                                colorCell.style.backgroundColor = this.value;
                                selectedTemp = this.value;
                                colorCell.setAttribute('id', "add_" + this.value);
                            });
                            colorPickerCell.append(dropdown);
                        }
                        else {
                            colorCell.style.backgroundColor = "#FFFFFFF"
                        }
                    }
                }
            });
            
                document.addEventListener("DOMContentLoaded", () => {

                    const dropdowns = document.querySelectorAll('select');
                    let selected_colors = [];
                    dropdowns.forEach((dropdown, index) => {
                        dropdown.addEventListener('change', (event) => {

                            // Reset each option to be enabled
                            for (let i = 0; i < dropdowns.length; i++) {
                                for (let op = 0; op < dropdowns[i].options.length; op++) {
                                    dropdowns[i].options[op].disabled = false;
                                }
                            }

                            //Reset the selected colors and then fill in the newly selected colors
                            selected_colors.length = 0;
                            for (let i = 0; i <  dropdowns.length; i++) {
                                selected_colors.push(dropdowns[i].value);
                            }

                            //Remove all of the "colors" that do not have a selection
                            selected_colors = selected_colors.filter(item => item !== "Select a color");

                            //If this is the first color, we set the default selected color to it
                            if (selectedColor === "") {
                                selectedColor = selected_colors[0];
                            }

                            //Loop through and disable each color that should not be available to each dropdown
                            for (let i = 0; i < dropdowns.length; i++) {
                                for (let op = 0; op < dropdowns[i].options.length; op++) {
                                    if (selected_colors.includes(dropdowns[i].options[op].value)) {
                                        if (dropdowns[i].options[op].value === dropdowns[i].value) continue;
                                        dropdowns[i].options[op].disabled = true;
                                    }

                                }
                            }
                        });
                    });
            });

            
                                
            document.addEventListener("DOMContentLoaded", () => {
                document.addEventListener("click", (event)=> {
                    if(event.target.className === "button_list"){
                        let addTextElements = document.getElementsByClassName('add-text');
                        for (let i = 0; i < addTextElements.length; i++) {
                            if (i.toString() === event.target.id.substring(7)) {
                                selectedColor = addTextElements[i].getAttribute('id').substring(addTextElements[i].getAttribute('id').indexOf('#'));
                                break;
                            }
                        }
                    }
                });
            });
                
                let tbl2 = document.getElementById("secondTbl");

                for (var i = 0; i <= rows; i++) {
                    const tr = tbl2.insertRow();
                    for (var j = 0; j <= columns; j++) {
                        if (i == 0 && j == 0) {
                            const td = tr.insertCell();
                            td.innerHTML = "";
                        } else if (i == 0) {
                            const td = tr.insertCell();
                            td.innerHTML = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".charAt(j - 1);
                        } else if (j == 0) {
                            const td = tr.insertCell();
                            td.innerHTML = i;
                        } else {
                            const td = tr.insertCell();
                            td.innerHTML = "";
                            td.setAttribute('id', ("ABCDEFGHIJKLMNOPQRSTUVWXYZ".charAt(j - 1)) + i);
                            td.setAttribute('class', "color_table");
                        }
                        
                    }
                }


            document.addEventListener("DOMContentLoaded", () => {
                document.addEventListener('click', (event) => {
                    if (event.target.className === "color_table" && selectedColor !== "") {
                        event.target.setAttribute('bgcolor', selectedColor);
                        let addTextElements = document.getElementsByClassName('add-text');

                        //Loop through each color td element in the first table
                        for (const element of addTextElements) {
                            if (element.getAttribute('id') === "add_" + selectedColor) {
                                if (!element.textContent.includes(event.target.id.toString())) {
                                    if (event.target.getAttribute("bgcolor") === null) {
                                        //Update the text alphabetically
                                        element.textContent = element.textContent + event.target.id + " ";
                                        element.textContent = element.textContent.split(" ").sort((a, b) => {
                                            if (a.match(/[a-z]+|\d+/gi) && b.match(/[a-z]+|\d+/gi)) {
                                                const [aLetter, aNum] = a.match(/[a-z]+|\d+/gi);
                                                const [bLetter, bNum] = b.match(/[a-z]+|\d+/gi);
                                                return aLetter.localeCompare(bLetter) || aNum - bNum;
                                            }
                                        }).join(" ");
                                    } else {
                                        //Update the text alphabetically
                                        element.textContent = element.textContent + event.target.id + " ";
                                        element.textContent = element.textContent.split(" ").sort((a, b) => {
                                            if (a.match(/[a-z]+|\d+/gi) && b.match(/[a-z]+|\d+/gi)) {
                                                const [aLetter, aNum] = a.match(/[a-z]+|\d+/gi);
                                                const [bLetter, bNum] = b.match(/[a-z]+|\d+/gi);
                                                return aLetter.localeCompare(bLetter) || aNum - bNum;
                                            }
                                        }).join(" ");

                                        //Remove the cell coordinate from the one it was previously in
                                        for (const rm of addTextElements) {
                                            if (rm.textContent.includes(event.target.id.toString()) && rm.id !== "add_" + selectedColor) {
                                                rm.textContent = rm.textContent.slice(0, rm.textContent.indexOf(event.target.id)) + rm.textContent.slice(rm.textContent.indexOf(event.target.id) + 3);
                                                break;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                });
            });

                
                function set_style(id, attr, value) {
                    var item = document.getElementById(id);
                    item.style[attr] = value;
                }
                function get_style (id, attr) {
                    return document.getElementById(id).style[attr];
                }
                
                let f = false;
                function generate_view() {
    
                    const newWindow = window.open('','_blank');
                    newWindow.document.write(document.documentElement.innerHTML);
                    newWindow.document.body.style.filter = 'grayscale(100%)';
                    
                    const elementt = newWindow.document.querySelectorAll('select');
                    elementt.forEach((element) => {
                        element.setAttribute('disabled', 'disabled');
                        element.style.pointerEvents = 'none';
                    });
                    const elementts = newWindow.document.querySelectorAll('button');
                    elementts.forEach((element) => {
                        element.setAttribute('disabled', 'disabled');
                        element.style.pointerEvents = 'none';
                    });
                    const elementtts = newWindow.document.querySelectorAll('nav');
                    elementtts.forEach((element) => {
                        element.setAttribute('disabled', 'disabled');
                        element.style.pointerEvents = 'none';
                    });
                    var link = newWindow.document.createElement("link");
                    link.rel = "stylesheet";
                    link.href = "local_html/m1/assets/css/CC.css";
                    newWindow.document.head.appendChild(link);
                    newWindow.document.style.disabled=false;


                }
            </script>
            <button class="button_one" onclick="generate_view();">
                Print
            </button>
    </section>
</main>