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
                      <li>
                        <a href='index.php?content=developer/javascript/statements'>
                            Statements
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/comments'>
                            comments
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/variables'>
                            variables
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/data-types'>
                            data-types
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/functions'>
                            functions
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/bmi_meter'>
                            bmi meter
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/ajax'>
                            Ajax
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/javascriptobjecten'>
                            javascriptobjecten
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/jsontest'>
                            JSON test
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/ajax_select'>
                            Ajax select
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/ajax_foto'>
                            Ajax foto
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/ajax_create'>
                            Ajax create
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/ajax_todo'>
                            Ajax todo
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/javascript/ajax_create_todo'>
                            Ajax create todo
                        </a>
                      </li>
                      <li id='json'>
                        JSON
                      </li>
                      <li>
                        <a href='index.php?content=developer/json/intro'>
                            Intro
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/json/testpagina01'>
                            Testpagina01
                        </a>
                      </li>
                      <li id='javascriptgame'>
                        JS Game
                      </li>
                      <li>
                        <a href='index.php?content=developer/jsgame/jsgame_intro'>
                            Intro
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jsgame/user_defined_objects'>
                            User-defined Objects
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
                      <li>
                        <a href='index.php?content=developer/jquery/hide_show'>
                            Hide/Show
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/fade'>
                            fade
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/slide'>
                            slide
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/animate'>
                            animate
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/chaining'>
                            chaining
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/getContent'>
                            Get Content
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/setContent'>
                            Set Content
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/css_classes'>
                            CSS Classes
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/css'>
                            CSS
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/ancestors'>
                            Ancestors
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/descendants'>
                            Descendants
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/siblings'>
                            Siblings
                        </a>
                      </li>
                      <li>
                        <a href='index.php?content=developer/jquery/filtering'>
                            Filtering
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