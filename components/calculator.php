<section class="calculator">
    <div class="calculator_container">
        <div class="section_heading_title">Caclulate as per your requirement</div>
        <h2 class="section_heading">HOW MANY TILES DO I NEED?</h2>
        <p>Calculate the required tiles & required box you need by entering the dimensions of your wall and/or floor to be covered into our Tile Calculator below.*</p>
        <div class="calculator_card_container">
            <div class="calculator_card_calculator">
                <h3 class="calculator_card_heading">YOUR REQUIREMENTS</h3>
                <h5 class="calculator_card_message">Enter Measurements</h5>
                <div class="calculator_form">
                    <div class="calculator_form_measurements">
                        <div class="calculator_form_length">
                            <label for="length">Length(m)</label>
                            <input type="number" id="length" placeholder="Length(m)">
                        </div>
                        <div class="calculator_form_width">
                            <label for="length">Width(m)</label>
                            <input type="number" id="width" placeholder="Width(m)">
                        </div>
                    </div>
                    <div class="calculator_form_selcet">
                        <label for="tiles_size">Select Tiles Size</label>
                        <select id="tiles_size">
                            <option value="1">600X600 MM ( Polished Glazed Porcelain Tiles )</option>
                            <option value="2">600X1200 MM ( Polished Glazed Porcelain Tiles )</option>
                            <option value="3">800X800 MM ( Polished Glazed Porcelain Tiles )</option>
                            <option value="4">1600X800 MM ( Polished Glazed Porcelain Tiles )</option>
                        </select>
                    </div>
                    <div class="calculator_form_button">
                        <button onclick="calculateCalculatorForm()">Calculate</button>
                        <button onclick="resetCalculatorForm()">Reset</button>
                    </div>
                </div>
            </div>
            <div class="calculator_card_result">
                <h3 class="calculator_card_heading">YOUR RESULTS</h3>
                <div class="calculator_card_result_box">
                    <p>You Require</p>
                </div>
                <div class="calculator_card_result_box">
                    <div id="no_of_tiles">0</div>
                    <p>No. of Tiles</p>
                </div>
                <div class="calculator_card_result_box">
                    <div id="no_of_boxes">0</div>
                    <p>No. of Boxes</p>
                </div>
                <div class="calculator_card_result_box">
                    <div id="area">0 sq.m.</div>
                    <p>Area Covered</p>
                </div>
            </div>
        </div>
        <p>* This may vary on basis of your actual need. This is only approx calculation.</p>
    </div>
</section>