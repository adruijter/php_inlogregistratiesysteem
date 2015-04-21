<ul>
	<li><a href='index.php?content=algemeneHomepage'>home</a></li>
<?php
	if (isset($_SESSION['userrole']))
	{
		echo "<li><a href='index.php?content=logout'>uitloggen</a></li>";
		switch ($_SESSION['userrole'])
		{
			case "developer":
				echo "<li id='javascript'>
                        JS Tutorial
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/home'>
                            Home
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/introduction'>
                            Introduction
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/where_to'>
                            Where to
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/output'>
                            Output
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/syntax'>
                            syntax
                        </a>
                      </li>
                      <li id='jquery'>
                        JQuery Tutorial
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/get_started'>
                            Get Started
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/syntax'>
                            Syntax/Selectors
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/events'>
                            events
                        </a>
                      </li>
                      <li id='php'>
						PHP
					  </li>
                      <div class='outer-container'>
                        <div class='inner-container'>
                            <div class='element'>
                              <li>
                                <a href='index.php?content=developer/php/arrays'>
                                    tutorial array
                                </a>
                              </li>
                              <li>
                                <a href='index.php?content=developer/php/file_handling'>
                                    file handling
                                </a>
                              </li>  
                              <li>
                                <a href='index.php?content=developer/php/conditional_statements'>
                                    conditional statements
                                </a>
                              </li> 
                              <li>
                                <a href='index.php?content=developer/php/foreach'>
                                    foreach
                                </a>
                              </li> 
                              <li>
                                <a href='index.php?content=developer/php/while_loops'>
                                    while loops
                                </a>
                              </li> 
                              <li>
                                <a href='index.php?content=developer/php/switch_case'>
                                    switch case
                                </a>
                              </li>
                              <li>
                                <a href='index.php?content=developer/php/for_loop'>
                                    for loop
                                </a>
                              </li>
                              <li>
                                <a href='index.php?content=developer/php/superglobals'>
                                    superglobals
                                </a>
                              </li>
                            </div>
                        </div>
                      </div>
					  <li id='csskop'>CSS3</li>
                      <div class='outer-container'>
                        <div class='inner-container'>
                            <div class='element'>
							<li>
								<a href='index.php?
										content=developer/css/syntax'>
									syntax
								</a>
							</li>
							<li>
								<a href='index.php?content=developer/css/selectors'>
									selectors
								</a>
							</li>
							<li>
								<a href='index.php?content=developer/css/howto'>
									howto
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/background'>
									background
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/csslink'>
									link
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/text'>
									text
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/font'>
									font
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/table'>
									table
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/boxmodel'>
									boxmodel
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/outline'>
									outline
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/margin'>
									margin
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/padding'>
									padding
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/dimensions'>
									dimensions
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/display'>
									display
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/positioning'>
									positioning
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/z-index'>
									z-index
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/floating'>
									floating
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/combinators'>
									combinators
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/pseudoclasses'>
								    pseudo classes
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/pseudoelements'>
								    pseudo elements
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/opacity'>
								   opacity
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/imagesprites'>
								   image sprites
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/mediatypes'>
								    @media types
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/attributeselectors'>
								    attribute selectors
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/roundedcorners'>
								    rounded corners
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/gradient'>
								    gradient
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/shadow_effects'>
								    shadow effects
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/tekst'>
				                tekst
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/2D-transforms'>
				                2D-transforms
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/3D-transforms'>
				                3D-transforms
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/transitions'>
				                transitions
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/scrolling'>
				                scrolling
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/animations'>
				                animations
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/multiple_columns'>
				                multiple columns
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/user_interface'>
				                User Interface
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/box_sizing'>
				                Box sizing
								</a>
							</li>
                             </div>
                        </div>
                      </div>					  
					  </li>";
			break;
			case "administrator":
				echo "<li><a href=''></a></li>";
			break;
			case "root":
				echo "<li><a href=''></a></li>";
			break;
			case "customer":
				echo "<li><a href='index.php?content=wijzig_wachtwoord'>wijzig wachtwoord</a></li>";
			break;
			case "photographer":
				echo "<li><a href=''></a></li>";
			break;
		}
	}
	else
	{
	echo "
		
		<li><a href='index.php?content=register_form'>registreren</a></li>
		<li><a href='index.php?content=Login_form'>inloggen</a></li>";
	}
?>
</ul>