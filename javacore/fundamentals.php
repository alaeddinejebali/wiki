<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#fundamentals">Fundamentals of Java</a>
		</h4>
	</div>
	<div id="fundamentals" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Basics</h2>
					<ul>
						<li>Javadoc comment
							<ul>
								<li class="noStyle"><?php include 'code/java_01.txt'; ?></li>
							</ul>
						</li>
						<li>If you have a <span class="samplecode">public class</span>, it needs to match the file name.
						</li>
						<li>You can put two (or more) classes in the same file. However,
							there can only be one <span class="samplecode">public class</span> per <span class="samplecode">.java</span> file,
							as public classes must have the same name as the source file
							(other classes must be declared without <i>public</i>).
						</li>
						<li>Hello program
							<ul>
								<li class="noStyle"><?php include 'code/java_02.txt'; ?></li>
								<li>The result of <i>javac</i> is a file of <i>bytecode</i> by
									the same name, but with a <i>.class</i> file name extension.</li>
								<li>
									Bytecode consists of instructions that the JVM knows how to
									execute.
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Packages and imports</h2>
					<ul>
						<li>Packages are logical groupings for classes.</li>
						<li>Java automatically looks (first) in the current package for
							other classes.</li>
						<li>Wildcards (<i>the "*"</i>)
							<ul>
								<li>Using the wildcard can shorten the import list.</li>
								<li><span class="samplecode">import java.util.*;</span>
									<ul>
										<li>Every class in the <span class="samplecode">java.util</span> package is available to this
											program when Java compiles it.</li>
										<li>It doesn’t import child packages, fields, or methods; it
											imports only classes.</li>
										<li class="caution">You might think that including so many
											classes slows down your program, but it doesn’t. The compiler
											fi gures out what’s actually needed. Which approach you choose
											is personal preference.</li>
									</ul></li>
								<li>There's one special package in the Java world called <span class="samplecode">java.lang</span>:
									it is automatically imported (this is why we use <span class="samplecode">System.</span>
									without importing <i>java.lang</i>).
								</li>
								<li>you can only have one wildcard and it must be at the end
									(example of error: <span class="samplecode">import java.nio.*.*;</span>).
								</li>
							</ul>
						</li>
						<li>Naming Conflicts
							<ul>
								<li>One of the reasons for using packages is so that class names
									don’t have to be unique across all of Java.</li>
								<li>If you explicitly import a class name, it takes precedence
									over any wildcards present.
									<ul>
										<li class="noStyle"><?php include 'code/java_03.txt'; ?></li>
									</ul>
								</li>
								<li>If you really need to use two classes with the same name
									<ul>
										<li class="noStyle"><?php include 'code/java_04.txt'; ?></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>Creating a new package
							<ul>
								<li class="noStyle"><?php include 'code/java_05.txt'; ?></li>
							</ul>
						</li>
						<li>Class Paths and JARs
							<ul>
								<li>You can also specify the location of the other files
									explicitly using a class path.</li>
								<li>This technique is useful when the class files are located
									elsewhere or in special JAR files.
									<ul>
										<li class="noStyle"><?php include 'code/java_06.txt'; ?></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Types of data</h2>
					<ul>
						<li><strong>Primitive Types</strong>
							<ul>
								<li>Java has 8 built-in data types:
									<ol>
										<li>boolean
											<ul>
												<li>true or false</li>
											</ul>
										</li>
										<li>byte
											<ul>
												<li>8-bit integral value (expl: 123)</li>
											</ul>
										</li>
										<li>short
											<ul>
												<li>16-bit integral value (expl: 123)</li>
											</ul>
										</li>
										<li>int
											<ul>
												<li>32-bit integral value (expl: 123)</li>
											</ul>
										</li>
										<li>long
											<ul>
												<li>64-bit integral value (expl: 123)</li>
											</ul>
										</li>
										<li>float
											<ul>
												<li>32-bit floating-point value (expl: 123.45f)</li>
												<li>java distinct a float from a double by the letter 'f'
													following the number.</li>
											</ul>
										</li>
										<li>double
											<ul>
												<li>64-bit floating-point value (expl: 123.456)</li>
											</ul>
										</li>
										<li>char
											<ul>
												<li>16-bit Unicode value (expl: 'a')</li>
											</ul>
										</li>
									</ol>
								</li>
								<li>A byte is 8 bits.</li>
								<li>A bit has two possible values: 0 or 1.</li>
								<li>2<supp>8</supp>=256
								</li>
								<li>A byte can hold a value from –128 to 127.</li>
								<li>-128 + 127 = 255</li>
								<li>Since 0 needs to be included in the range, -128 + 127 + 1 =
									256</li>
								<li>The number of bits is used by Java when it figures out how
									much memory to reserve for your variable. (expl: when you write
									<i>int num;</i> Java allocates 32 bits)
								</li>
							</ul>
						</li>
						<li><strong>Reference Types</strong>
							<ul>
								<li>It refers to an object</li>
								<li>Unlike primitive types that hold their values in the memory
									where the variable is allocated, references do not hold the
									value of the object they refer to. Instead, a reference "points"
									to an object by storing the memory address where the object is
									located, a concept referred to as a pointer.</li>
								<li>An object in memory can be accessed only via a reference.</li>
							</ul>
						</li>
						<li>Primitives types vs reference types
							<ul>
								<li>All the primitive types have lowercase type names. Reference
									types starts with uppercase.</li>
								<li>Reference types can be assigned <i>null</i>, which means they
									do not currently refer to an object. Primitive types will give
									you a compiler error if you attempt to assign them <i>null</i>.
									<ul>
										<li class="noStyle"><?php include 'code/java_20.txt'; ?></li>
									</ul>
								</li>
								<li>Reference types can be used to call methods when they do not
									point to <i>null</i>. Primitives types do not have methods.
									<ul>
										<li class="noStyle"><?php include 'code/java_21.txt'; ?></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Declaring and Initializing Variables</h2>
					<ul>
						<li>A variable is a name for a piece of memory that stores data.</li>
						<li>Variable names are case sensitive.</li>
						<li>Each variable must be declared with a type.
							<ul>
								<li class="noStyle"><?php include 'code/java_24.txt'; ?></li>
							</ul>
						</li>
						<li>It's not possible to declare multiple variables of different
							types in the same statement.
							<ul>
								<li class="noStyle"><?php include 'code/java_22.txt'; ?></li>
							</ul>
						</li>
						<li>It's not possible to declare two different types in the same
							statement.
							<ul>
								<li class="noStyle"><?php include 'code/java_23.txt'; ?></li>
							</ul>
						</li>
						<li>Identifiers
							<ul>
								<li>There are only three rules to remember for legal identifiers:
									<ul>
										<li>The name must begin with a letter or with "$" or " _".</li>
										<li>The name must contain letters, digits, charachters "$",
											charachters" _".</li>
										<li>You cannot use the same name as a Java reserved word
											(abstract, boolean, native, goto...etc).
											<ul>
												<li>Exemple legal identifiers:
													<ul>
														<li class="noStyle"><?php include 'code/java_23.txt'; ?></li>
													</ul>
												</li>
												<li>Exemple illegal identifiers:
													<ul>
														<li class="noStyle"><?php include 'code/java_23.txt'; ?></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>It's recommended that you don’t start any identifiers with
									"$" because the compiler uses this symbol for some files.</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Variables types</h2>
					<ul>
						<li>
							Variables in Java can be defined anywhere in the code (inside a class, inside a method or as a method argument) and can have different modifiers.
						</li>
						<li>
							Depending on these conditions variables in Java can be divided into 4 categories:
							<ol>
								<li>Local variables</li>
								<li>Instance variables</li>
								<li>Static variables (Class variable)</li>
								<li>Method parametesr</li>
							</ol>
						</li>
						<li>
							Local Variables
							<ul>
								<li>There are variables defined within a method.</li>
								<li>They must be initialized before use (they are not assigned a default value).</li>
								<li>The compiler will not let you read an uninitialized value.
									<ul>
										<li class="noStyle"><?php include 'code/java_27.txt'; ?></li>
									</ul>
									The compiler is also smart enough to recognize initializations that are more complex.
									<ul>
										<li class="noStyle"><?php include 'code/java_28.txt'; ?></li>
									</ul>
								</li>
								<li>
									They cannot use any of the access level since its scope is only inside the method.
									"Final" is the Only Non Access Modifier that can be applied to a local variable.
									<ul>
										<li class="noStyle"><?php include 'code/java_40.txt'; ?></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							Instance variables
							<ul>
								<li>
									They are variables which are <u>not declared with static</u> keyword and are <u>outside any method declaration</u>. 
								</li>
								<li>
									They are used by objects to store their states.
									<ul>
										<li class="noStyle">
											<?php include "code/java_41.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									The are called instance variables because their values are instance specific and <u>values</u> of these variables are <u>not shared among instances</u> ("<i>Ala</i>" value is only related to <i>a1</i> instance).
								</li>
							</ul>
						</li>
						<li>
							Static variables (Class variables)
							<ul>
								<li>
									They are declared with <u>static</u> keyword inside a Class (outside any method).
								</li>
								<li>
									They are known as Class level variables because values of these variables are not specific to any instance but are common to all instances of a class.
								</li>
								<li>
									They will be <u>shared by all instances</u> of an Object.
									<ul>
										<li class="noStyle">
											<?php include "code/java_42.txt"; ?>
										</li>
									</ul>
								</li>
								<li>
									
								</li>
							</ul>
						</li>
						<li class="caution">
							Instance and Class Variables
							<ul>
								<li>
									Instance and class variables do not require you to initialize them:
									When you declare these variables, the compiler gives them a default value:
									<ul>
										<li>boolean => false</li>
										<li>byte, short, int, long => 0</li>
										<li>float , double => 0.0</li>
										<li>Everything else => null</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							Method parameter
							<ul>
								<li>
									They are variables that are passed in Methods. 
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Variable Scope</h2>
					<ul>
						<li>Local variables can never have a scope larger than the method
							they are defined in. However, they can have a smaller scope (block
							where they are defined).
							<ul>
								<li class="noStyle"><?php include 'code/java_28.txt'; ?></li>
							</ul>
						</li>
						<li>Instance variables: in scope from declaration until object
							garbage collected (ie: when the object is destroyed).</li>
						<li>Class variables: in scope from declaration until program ends.
						</li>
					</ul>
				</li>
				<li>
					<h2>Elements in a Class</h2>
					<ul>
						<li>Ordering elements in a class:
							<ol>
								<li>Packages (if any)</li>
								<li>Imports (if any)</li>
								<li>Class declaration (required)</li>
								<li>All fields must be declared inside the class.</li>
							</ol>
						</li>
						<li>Inner classes are classes within a class.</li>
						<li>Multiple classes can be defined in the same file, but only one
							of them is allowed to be "public".
							<ul>
								<li>The file name must mutch the public class name.</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h2>Destroying Objects</h2>
					<ul>
						<li>Java provides a garbage collector to automatically look for
							objects that aren’t needed anymore.</li>
						<li>All Java objects are stored in your program memory’s <b>heap</b>.
							<ul>
								<li>The heap represents a large pool of unused memory allocated
									to your Java application.</li>
							</ul>
						</li>
						<li>Garbage Collection
							<ul>
								<li>It refers to the process of automatically freeing memory on
									the heap by deleting objects that are no longer reachable in
									your program.</li>
								<li>System.gc()
									<ul>
										<li>It meekly suggests that now might be a good time for Java
											to kick off a garbage collection run.</li>
										<li>It is not guaranteed to run.</li>
									</ul>
								</li>
								<li>An object is no longer reachable when one of two situations
									occurs:
									<ul>
										<li>The object no longer has any references pointing to it.</li>
										<li>All references to the object have gone out of scope.</li>
									</ul>
								</li>
								<li>Objects vs References
									<ul>
										<li>They are two different entities.</li>
										<li>The reference is a variable that has a name and can be used
											to access the contents of an object. Objects have no name.</li>
										<li>A reference can be assigned to another reference, passed to
											a method, or returned from a method.</li>
										<li>All references are the same size, no matter what their type
											is. Objects vary in size depending on their class definition.
										</li>
										<li>A reference may or may not be created on the heap. Objects
											are always on the heap.</li>
										<li>An object sits on the heap and does not have a name.
											Therefore, you have no way to access an object except through
											a reference.</li>
										<li>An object cannot be assigned to another object, nor can an
											object be passed to a method or returned from a method.</li>
										<li>It is the object that gets garbage collected, not its
											reference.</li>
									</ul>
								</li>
								<li>Example: When each object first becomes eligible for garbage
									collection?
									<ul>
										<li class="noStyle">
											<?php include "code/java_10.txt"; ?>
										</li>
									</ul>
									<ul>
										<li class="noStyle">
											Solution
											<?php include "code/java_11.txt"; ?>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>finalize()
							<ul>
								<li>Called if the garbage collector tries to collect the object.
								</li>
								<li>If the garbage collector doesn’t run, the method doesn’t get
									called.</li>
								<li>can run only 0 or 1 time
									<ul>
										<li>If the garbage collector fails to collect the object and
											tries to run it again later, the method doesn’t get called a
											second time.</li>
									</ul>
								
								<li>Examples
									<ul>
										<li>Example 1:
											<ul>
												<li class="noStyle">
													<?php include "code/java_12.txt"; ?>
												</li>
												<li>There is no need to call the garbage collector ==> <i>finalize()</i>
													will not be called.
												</li>
											</ul>
										</li>
										<li>Example 2:
											<ul>
												<li class="noStyle">
													<?php include "code/java_13.txt"; ?>
												</li>
												<li>The end of the method, the object is no longer eligible
													for garbage collection because a static variable is
													referring to it and static variables stay in scope until the
													program ends ==> <i>finalize()</i> will not be called.
												</li>
											</ul>
										</li>
										<li>Example 3:
											<ul>
												<li class="noStyle">
													<?php include "code/java_14.txt"; ?>
												</li>
												<li>When <i>objects = null</i> => Java will remove the object
													from memory.
												</li>
												<li>Java remembers already running finalize() on this object
													and will not do so again ==> <i>finalize()</i> will not be
													called.
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>