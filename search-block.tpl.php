<div class="search-wrap">
<div class="search">
<form name="searchengine" id="ui_element" class="sb_wrapper" method="post" action="javascript:multiPSUsearch()" >
<p><label for="search" class="hidden">Search:</label><input title="Enter the terms you wish to search for." placeholder="Search" id="search" name="search" class="sb_input" type="text"/><input id="searchButton" class="sb_search" onclick="javascript:multiPSUsearch()" type="submit" value=""/></p>
<ul class="sb_dropdown" style="display:none;">
							 <li id="engine-psu">
								  <input id="psu" type="radio" name="engine" value="0"   >
								  <label for="psu" >Penn State</label>
							 </li>
								<li id="engine-people">
									<input id="people" type="radio" name="engine" value="1" >
									<label for="people">People</label>
								</li>
								<li id="engine-departments">
									<input id="departments" type="radio" name="engine" value="2" >
									<label for="departments">Departments</label>
								</li>
								<li id="engine-this_site">
									<input id="this_site" type="radio" name="engine" value="3" checked>
									<label for="this_site">This Site</label>
								</li>
							</ul>
						</form>
					</div>
					<noscript>
						<div class="njsearch">
							<ul id="searchForm_nj">
								<li>
									Search:
								</li>
								<li>
									<a href="http://search.psu.edu">Penn State</a>
								</li>
								<li>
									<a href="http://search.psu.edu/ldap/">People</a>
								</li>
								<li>
									<a href="http://search.psu.edu/ph/department/">Departments</a>
								</li>
								<li>
									<a href="/search">This Site</a>
								</li>
							</ul>
						</div>
					</noscript>
</div>
		<div style="display: none;">
			<form name="psupeople" id="psupeople" method="post" action="http://www.psu.edu/cgi-bin/ldap/ldap_query.cgi" >
				<input type="hidden" name="cn" id="cn"/>
			</form>
			<form name="psudepts" id="psudepts" method="post" action="http://www.psu.edu/cgi-bin/ldap/dept_query.cgi">
				<input type="hidden" name="dept_name" id="dept_name" />
			</form>
			<form action="/search/node" method="post" id="thissite" name="thissite">
 				<input type="hidden" id="keys" name="keys" />
			</form>
		</div>	