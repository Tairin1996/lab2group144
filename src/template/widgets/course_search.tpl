<div class="widget-main">
    <div class="widget-inner">
        <div class="course-search">
            <h3>Find a course</h3>

            <form id="quick_form" class="course-search-form">

                <input name="input" id="input" class="searchbox" placeholder="Type Course Title in Here" autocomplete="off"  title="Course Title">

                <div id="search_advanced" class="clearfix">

                    <p class="search-form-item">
                        <label class="alabel" for="Campus">Campus:</label>
                        <select class="searchselect" id="Campus" name="Campus">
                            <option value="-1">-- select --</option>
                            <option value="Ballarat">Ballarat</option>
                            <option value="Brisbane">Brisbane</option>
                            <option value="Canberra">Canberra</option>
                            <option value="Melbourne">Melbourne</option>
                            <option value="North Sydney">North Sydney</option>
                            <option value="Strathfield">Strathfield</option>
                        </select>
                    </p>
                    <p class="search-form-item">
                        <label class="alabel" for="Discipline">Discipline:</label>
                        <select class="searchselect" id="Discipline" name="Discipline">
                            <option value="-1">-- select --</option>
                            <option value="Accounting and Finance">Accounting and Finance</option>
                            <option value="Applied Public Health">Applied Public Health</option>
                            <option value="Arts and Media">Arts and Media</option>
                            <option value="Business Administration">Business Administration</option>
                            <option value="Clinical Education">Clinical Education</option>
                            <option value="Counselling">Counselling</option>
                            <option value="Creative Arts">Creative Arts</option>
                            <option value="Visual Arts and Design">Visual Arts and Design</option>
                            <option value="Cross Institutional">Cross Institutional</option>
                            <option value="Education Law">Education Law</option>
                            <option value="Educational Leadership">Educational Leadership</option>
                        </select>

                    <p class="search-form-item">
                        <label class="alabel" for="Study_Level">Study Level:</label>
                        <select class="searchselect" id="Study_Level" name="Study_Level">
                            <option value="-1">-- select --</option>
                            <option value="Undergraduate">Undergraduate</option>
                            <option value="Postgraduate">Postgraduate</option>
                            <option value="CPD">CPD</option>
                            <option value="Other">Other</option>
                        </select>

                    <p class="search-form-item select-yes">
                        <label class="alabel" for="Online">Online:</label>
                        <input value="Yes" id="Online" name="Online" type="checkbox">
                        <span>Yes</span>

                    <p class="search-form-item select-yes">
                        <label class="alabel" for="International">International:</label>
                        <input value="Yes" id="International" name="International" type="checkbox">
                        <span>Yes</span>

                    <p class="search-form-item select-yes">
                        <label class="alabel" for="Midyear">Midyear Entry:</label>
                        <input value="1" id="Midyear" type="checkbox" name="Midyear">
                        <span>Yes</span>

                </div>
                <input class="mainBtn" value="Submit Search" type="submit">
            </form>

        </div>
    </div> <!-- /.widget-inner -->
</div> <!-- /.widget-main -->