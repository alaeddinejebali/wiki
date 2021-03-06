<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#tipsandtricks">Tips and Trivks</a>
		</h4>
	</div>
	<div id="tipsandtricks" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Add SSH key</h2>
					<ul>
						<li>
							Check if you already have the keys
							<ul>
								<li>
									$> cd ~/.ssh && ls
									if you see those 2 files <span class="samplecode">id_rsa</span><span class="samplecode">id_rsa.pub </span>, it means that you already have keys generated.
								</li>
								<li>
									else you need to generate them
									$> cd ~/.ssh
									$> ssh-keygen
									keep the passphrase empty
								</li>
							</ul>
						</li>
						<li>
							Deploy your keys
							$> cat ~/.ssh/id_rsa.pub
							Copy the content of the public key and paste it into you github/gitlab interface
						</li>
						<li>
							Never deploy your private key!
						</li>
						<li>
							
						</li>						
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Define default branch for git push</h2>
					<ul>
						<li class="noStyle">
			            	<?php include "code/git_code_11.txt"; ?>
						</li>
						<li>If you haven't already do that, you may see an error when
							running git push saying "error: failed to push some refs to...
							hint: Updates were rejected because a pushed branch tip is behind
							its remote".</li>
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Configure 2 GIT accounts on the same PC</h2>
					<ul>
						<li>
							Let's say that you're working for a company C1 and a company C2. We suppose that you've configured globally your account:
			                <?php include "code/git_code_08.txt"; ?>
						</li>
						<li>
			            	Now if you'll work for a C2 project, you can configure a GIT account only for this repository:
			                <?php include "code/git_code_09.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Show GIT configuration by project</h2>
					<ul>
						<li class="noStyle">
							<?php include "code/git_code_10.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Discard changes on file</h2>
					<ul>
						<li class="noStyle">
							<?php include "code/git_code_12.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Add an existing project to GitHub</h2>
					<ul>
						<li class="noStyle">
							<?php include "code/git_code_06.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Color Git console in Ubuntu</h2>
					<ul>
						<li>update the package index</li>
						<li class="noStyle">
							Open "home/userName/.gitconfig" file (Ctrl+H to display hidden files) and edit it like this:
			                <?php include "code/git_code_01.txt"; ?>
							If you don't see your "home/userName/.gitconfig" even when you display hidden files "Ctrl+H"
							<?php include "code/git_code_05.txt"; ?>
						</li>
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Check for remote updates (without/before doing git pull)</h2>
					<ul>
						<li>Update the remote branch in your repository to point to the latest version (suppose we're working on develop branch)
			            	<?php include "code/git_code_02.txt"; ?>
			            </li>
						<li>Show the log entries between your last common commit and the origin branch:
							<?php include "code/git_code_03.txt"; ?>
			            </li>
	
						<li>Show differences:
							<?php include "code/git_code_29.txt"; ?>
			            </li>					
						<li>
							If you're okay, accept <strong>all</strong> changes:
			            	<?php include "code/git_code_04.txt"; ?>
			            </li>
						
						<li>
							If you're not prepared to do a pull and merge in all the remote commits, you can use:
			            	<?php include "code/git_code_04.txt"; ?>
							to accept only the specific remote commits you want. Later, when you're ready to get everything, a git pull will merge in the rest of the commits.
			            </li>					
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>Show file's diffence between master and develop</h2>
					<ul>
						<li class="noStyle"><?php include "code/git_code_07.txt"; ?></li>
						<li>Red lines are lines removed from 'develop' and they are
							existing for now in 'master'.</li>
						<li>Green lines are lines added in 'develop' and they are not
							existing for now in 'master'.</li>
					</ul>
				</li>
			</ul>
	
			<ul>
				<li>
					<h2>See changes before commiting</h2>
					<ul>
						<li class="noStyle"><?php include "code/git_code_13.txt"; ?></li>
					</ul>
				</li>
			</ul>
			<ul>
				<li>
					<h2>Discard las commit (which is not pushed)</h2>
					<ul>
						<li class="noStyle"><?php include "code/git_code_32.txt"; ?></li>
					</ul>
				</li>
			</ul>		
	
			<ul>
				<li>
					<h2>Push a new local branch to a remote</h2>
					<ul>
						<li class="noStyle"><?php include "code/git_code_14.txt"; ?></li>
					</ul>
				</li>
			</ul>
	
			<h2>"warning: push.default is unset; its implicit value is changing in
				Git 2.0 from 'matching' to 'simple'. To squelch this message and
				maintain..."</h2>
			<ul>
				<li>
					To get rid of the message, set push.default:
					<?php include "code/git_code_15.txt"; ?>
				</li>
			</ul>
	
			<h2>Show modified files since last n commits</h2>
			<ul>
				<li class="noStyle"><?php include "code/git_code_17.txt"; ?></li>
			</ul>
	
			<h2>Show modified files between 2 commits</h2>
			<ul>
				<li class="noStyle"><?php include "code/git_code_19.txt"; ?></li>
			</ul>
	
			<h2>Show modification on a file since last n commits</h2>
			<ul>
				<li class="noStyle"><?php include "code/git_code_16.txt"; ?></li>
			</ul>
	
			<h2>Show modifications made in a file between 2 commits</h2>
			<ul>
				<li class="noStyle"><?php include "code/git_code_18.txt"; ?></li>
			</ul>
	
			<h2>Show merge conflicts</h2>
			<ul>
				<li>git diff</li>
			</ul>
		</div>
	</div>
</div>
