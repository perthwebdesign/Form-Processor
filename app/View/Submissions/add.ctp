<div class="submissions form">
	
	<div id="header">
		<?php echo $this->Html->image('logo-triplec.gif') ?>
		
		<div class="details">
			<p>All ASX transactions are executed and cleared by</p>
			<p>Penson Financial Services Australia Pty Ltd (Penson)</p>
			<address>
				ABN 60 136 184 962 AFSL No. 338264<br />
				Level 7, 1 Chifley Square SYDNEY NSW 2000
			</address>
		</div>
	</div>
	
<?php echo $this->Form->create('Submission'); ?>
	<h3>Client Application Form</h3>
	
		<fieldset class="account-details">
			<ul>
				<li><?php echo $this->Form->input( "Result.Account_Number", array( 'type' => 'text' ) ) ?></li>
				<li><?php echo $this->Form->input( "Result.Equities_Advisor_Code", array( 'type' => 'text' ) ) ?></li>
				<li><?php echo $this->Form->input( "Result.Options_Advisor", array( 'type' => 'text' ) ) ?></li>
			</ul>
		
			<ul>
				<li><?php echo $this->Form->input( "Result.HIN", array( 'type' => 'text' ) ) ?></li>
				<li><?php echo $this->Form->input( "Result.Equities_Brokerage", array( 'type' => 'text' ) ) ?></li>
				<li><?php echo $this->Form->input( "Result.Options_Brokerage", array( 'type' => 'text' ) ) ?></li>
			</ul>
		</fieldset>
	
		<div class="details">
			<h6>Required</h6>
			<dl>
				<dt>PART A:</dt><dd>Client Application Form, Acknowledgments and Execution</dd>
			</dl>
			
			<h6>Optional</h6>
			<dl>
				<dt>PART B:</dt><dd>Registered Holder Collateral Cover Authorisation Form ‐ Required For Options Accounts</dd>
				<dt>PART C:</dt><dd>Broker to Broker Transfer Authority Form</dd>
				<dt>PART D:</dt><dd>Broker to Broker Transfer Authority Form ‐ Options</dd>
			</dl>
			
			<h6>For Client to Keep for Their Records</h6>
			<dl>
				<dt>PART E:</dt><dd>Penson Terms and Conditions</dd>
				<dt>PART F:</dt><dd>Penson’s Explanation of CHESS Sponsorship Agreement & Penson Sponsorship Agreement</dd>
				<dt>PART G:</dt><dd>Penson’s Direct Debit Request and Service Agreement</dd>
				<dt>PART H:</dt><dd>Penson Product Disclosure Statement (PDS) for Exchange Traded Options</dd>
				<dt>PART I:</dt><dd>Penson Derivatives Client Agreement</dd>
				<dt>PART J:</dt><dd>Privacy Statements</dd>
				<dt>PART K:</dt><dd>Penson Financial Services Guide (FSG)</dd>
			</dl>
			<p>Please read this entire document carefully before completing this application form.</p>
		</div>
		
		<fieldset class="section">
			<legend>1. Type of Applicant</legend>
			<?php
				echo $this->Form->radio( "Result.Applicant_Type",
					array( "Individual", "Joint", "Superannuation Fund", "Company", "Trust", "Other" )
				)
			?>
		</fieldset>
		
		<fieldset class="section">
			<legend>2. Account Name / Designation</legend>
			<?php echo $this->Form->input("Result.account_name_designation", array( 'type' => 'text' ) ) ?>
		</fieldset>
	
	
		<div>
		<h3>3. Account Details</h3>
			<fieldset class="individual-client">
				<legend>A. Individual Client #1</legend>
				<p>Your name must match your ID exactly. Date of Birth required as part of the AML Identification Requirements</p>
				
				<fieldset>
					<?php
						echo $this->Form->input("Result.individual_client_1_title", array(
							'label' => 'Title',
							'class' => 'small',
							'type' => 'text',
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_given_names", array(
							'label' => 'Given Names',
							'type' => 'text'
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_surname", array(
							'label' => 'Surname',
							'type' => 'text'
						))
					?>
					
					<fieldset class="residential-address">
						<?php
							echo $this->Form->input("Result.individual_client_1_residential_address", array(
								'label' => 'Residential Address',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_1_state", array(
								'label' => 'State',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_1_postcode", array(
								'label' => 'Postcode',
								'type' => 'text'
							))
						?>
					</fieldset>
					
					<fieldset class="postal-address">
						<?php
							echo $this->Form->input("Result.individual_client_1_postal_address", array(
								'label' => 'Postal Address',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_1_state", array(
								'label' => 'State',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_1_postcode", array(
								'label' => 'Postcode',
								'type' => 'text'
							))
						?>
					</fieldset>
					
					<?php
						echo $this->Form->input("Result.individual_client_1_email_address", array(
							'label' => 'Email Address',
							'type' => 'text'
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_tel_home", array(
							'label' => 'Tel (H)',
							'type' => 'text'
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_tel_work", array(
							'label' => 'Tel (W)',
							'type' => 'text'
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_mobile", array(
							'label' => 'Mobile',
							'type' => 'text'
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_fax", array(
							'label' => 'Fax',
							'type' => 'text'
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_date_of_birth", array(
							'label' => 'Date of Birth',
							'type' => 'date'
						))
					?>
					<?php
						echo $this->Form->input("Result.individual_client_1_occupation", array(
							'label' => 'Occupation',
							'type' => 'text'
						))
					?>
					
					<?php
						echo $this->Form->input("Result.individual_client_1_abn", array(
							'label' => 'ABN, (If Applicable)',
							'type' => 'text'
						))
					?>
				</fieldset>
			</fieldset>
			
			<fieldset class="individual-client">
				<legend>B. Individual Client #2</legend>
				<p>Your name must match your ID exactly. Date of Birth required as part of the AML Identification Requirements</p>
				
					<fieldset>
						<?php
							echo $this->Form->input("Result.individual_client_2_title", array(
								'label' => 'Title',
								'class' => 'small',
								'type' => 'text',
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_given_names", array(
								'label' => 'Given Names',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_surname", array(
								'label' => 'Surname',
								'type' => 'text'
							))
						?>
						
						<fieldset class="residential-address">
							<?php
								echo $this->Form->input("Result.individual_client_2_residential_address", array(
									'label' => 'Residential Address',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_2_state", array(
									'label' => 'State',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_2_postcode", array(
									'label' => 'Postcode',
									'type' => 'text'
								))
							?>
						</fieldset>
						
						<fieldset class="postal-address">
							<?php
								echo $this->Form->input("Result.individual_client_2_postal_address", array(
									'label' => 'Postal Address',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_2_state", array(
									'label' => 'State',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_2_postcode", array(
									'label' => 'Postcode',
									'type' => 'text'
								))
							?>
						</fieldset>
						
						<?php
							echo $this->Form->input("Result.individual_client_2_email_address", array(
								'label' => 'Email Address',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_tel_home", array(
								'label' => 'Tel (H)',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_tel_work", array(
								'label' => 'Tel (W)',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_mobile", array(
								'label' => 'Mobile',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_fax", array(
								'label' => 'Fax',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_date_of_birth", array(
								'label' => 'Date of Birth',
								'type' => 'date'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_2_occupation", array(
								'label' => 'Occupation',
								'type' => 'text'
							))
						?>
						
						<?php
							echo $this->Form->input("Result.individual_client_2_abn", array(
								'label' => 'ABN, (If Applicable)',
								'type' => 'text'
							))
						?>
					</fieldset>
			</fieldset>
			
			<fieldset class="individual-client">
				<legend>C. Individual Client #3</legend>
				<p>Your name must match your ID exactly. Date of Birth required as part of the AML Identification Requirements</p>
				
				<fieldset>
						<?php
							echo $this->Form->input("Result.individual_client_3_title", array(
								'label' => 'Title',
								'class' => 'small',
								'type' => 'text',
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_given_names", array(
								'label' => 'Given Names',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_surname", array(
								'label' => 'Surname',
								'type' => 'text'
							))
						?>
						
						<fieldset class="residential-address">
							<?php
								echo $this->Form->input("Result.individual_client_3_residential_address", array(
									'label' => 'Residential Address',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_3_state", array(
									'label' => 'State',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_3_postcode", array(
									'label' => 'Postcode',
									'type' => 'text'
								))
							?>
						</fieldset>
						
						<fieldset class="postal-address">
							<?php
								echo $this->Form->input("Result.individual_client_3_postal_address", array(
									'label' => 'Postal Address',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_3_state", array(
									'label' => 'State',
									'type' => 'text'
								))
							?>
							<?php
								echo $this->Form->input("Result.individual_client_3_postcode", array(
									'label' => 'Postcode',
									'type' => 'text'
								))
							?>
						</fieldset>
						
						<?php
							echo $this->Form->input("Result.individual_client_3_email_address", array(
								'label' => 'Email Address',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_tel_home", array(
								'label' => 'Tel (H)',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_tel_work", array(
								'label' => 'Tel (W)',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_mobile", array(
								'label' => 'Mobile',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_fax", array(
								'label' => 'Fax',
								'type' => 'text'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_date_of_birth", array(
								'label' => 'Date of Birth',
								'type' => 'date'
							))
						?>
						<?php
							echo $this->Form->input("Result.individual_client_3_occupation", array(
								'label' => 'Occupation',
								'type' => 'text'
							))
						?>
						
						<?php
							echo $this->Form->input("Result.individual_client_3_abn", array(
								'label' => 'ABN, (If Applicable)',
								'type' => 'text'
							))
						?>
					</fieldset>
			</fieldset>
			
			<fieldset class="individual-client">
				<legend>D. Company / Corporate Client</legend>
				
				<fieldset>
					<?php echo $this->Form->input("Result.company_name", array( 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.company_abn_acn_arbn", array( 'label' => 'ABN/ ACN /ARBN', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.company_country_of_incorporation", array( 'label' => 'Country of Incorporation', 'type' => 'text' ) ) ?>
					
					<fieldset class="office-address">
						<?php echo $this->Form->input("Result.company_office_address", array( 'label' => 'Registered Office Address', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_office_state", array( 'label' => 'State', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_office_postcode", array( 'label' => 'Postcode', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<fieldset class="business-address">
						<?php echo $this->Form->input("Result.company_business_address", array( 'label' => 'Principal Place of Business Address', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_business_state", array( 'label' => 'State', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_business_postcode", array( 'label' => 'Postcode', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<fieldset class="postal-address">
						<?php echo $this->Form->input("Result.company_postal_address", array( 'label' => 'Postal Address', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_postal_state", array( 'label' => 'State', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_postal_postcode", array( 'label' => 'Postcode', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<?php
						echo $this->Form->input(
							'Result.company_type', array(
								'type' => 'radio',
								'options' => array( "Public", "Proprietary" )
							)
						)
					?>
					
					If Proprietary, complete director & shareholder details below. 
					
					<fieldset class="directors">
						<legend><strong>Each Directors Name in Full</strong> (If there are additional Directors, please supply list of names on a separate page)</legend>

						<?php echo $this->Form->input("Result.company_number_of_directors", array( 'label' => 'No. of Directors', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_director_name_1", array( 'label' => 'Director 1', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_director_name_2", array( 'label' => 'Director 2', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_director_name_3", array( 'label' => 'Director 3', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<fieldset class="shareholders">
						<legend><strong>Shareholder Details:</strong> Full name and residential address of each individual who owns, through one or more shareholdings, more than 25% of the issued capital of the Company.</legend>
						
						<?php echo $this->Form->input("Result.company_shareholder_name_1", array( 'label' => 'Name of Individual', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.company_shareholder_addresss_1", array( 'label' => 'Residential Address of Individual', 'type' => 'text' ) ) ?>
					</fieldset>
				</fieldset>
			</fieldset>
			
			<fieldset class="individual-client">
				<legend>E. Trustee / Superannuation Client</legend>
				
				<p>If you are applying as a corporate trustee, please also complete section 3D above.</p>
				<p>If you are applying as an individual/joint trustee, please also complete Section 3A/B/C above.</p>
				
				<fieldset>
					<?php echo $this->Form->input("Result.trustee_name", array( 'label' => 'Name of Trust', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.trustee_abn_arbn", array( 'label' => 'ABN/ ARBN', 'type' => 'text' ) ) ?>
					
					<?php echo $this->Form->input("Result.trustee_country_of_establishment", array( 'label' => 'Country of Establishment', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.trustee_business_name", array( 'label' => 'Business name of the Trustee (if any)', 'type' => 'text' ) ) ?>
					
					<?php
						echo $this->Form->input(
							'Result.trustee_type', array(
								'label' => 'Type of Trust',
								'type' => 'radio',
								'options' => array(
									"Registered managed investment scheme",
									"Regulated Trust (e.g. SMSF)",
									"Govt superannuation fund",
									"Unregistered management investment scheme with only wholesale clients which does not make small scale offerings under section 1012E of the corporations Act 2001 (Cth)"
								)
							)
						) 
					?>
					
					<?php
						echo $this->Form->input(
							"Result.trustee_type_other", array(
								'type' => 'text',
								'label' => "If other, please specify (e.g. family, unit, charitable, estatee)" 
							) 
						)
					?>
					
					<?php echo $this->Form->radio( "Result.trustee_australian_resident", array( 'label' => 'Is the trust an Australian resident for tax purposes?', "Yes", "No" ) ) ?>
					<?php echo $this->Form->input( "Result.trustee_country_of_tax_residence", array( 'label' => 'If no, please specify country of tax residence', 'type' => 'text' ) ) ?>
					
					<p><strong>NOTE:</strong> Penson (and its related bodies corporate and affiliates) only recognises the Trustee(s) as the investor and not the beneficiary, therefore the trustee(s) details must be given in 3A, B, C or D above as appropriate. However, Penson (and its related bodies corporate and affiliates) is also required to record the individual beneficiary details if you have ticked "Other" in the section "Type of Trust" above.</p>
					
					<fieldset>
						<?php echo $this->Form->input("Result.trustee_beneficiary_name_1", array( 'label' => 'Beneficiary 1 Name', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.trustee_abn_acn_arbn_1", array( 'label' => 'ABN/ACN/ARBN: (if applicable)', 'type' => 'text' ) ) ?>
						
						<?php echo $this->Form->input("Result.trustee_beneficiary_name_2", array( 'label' => 'Beneficiary 2 Name', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.trustee_abn_acn_arbn_2", array( 'label' => 'ABN/ACN/ARBN: (if applicable)', 'type' => 'text' ) ) ?>
						
						<?php echo $this->Form->input("Result.trustee_beneficiary_name_3", array( 'label' => 'Beneficiary 3 Name', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.trustee_abn_acn_arbn_3", array( 'label' => 'ABN/ACN/ARBN: (if applicable)', 'type' => 'text' ) ) ?>
					</fieldset>
				</fieldset>
			</fieldset>
		</div>

		<fieldset id="authorised-agent" class="section">
			<legend>4. Authorised Agent</legend>
			<p><strong>Corporate Clients:</strong> You must nominate at least one person as Authorised Agent.</p>
			<p><strong>Other Clients:</strong> Do you wish to authorise someone other than the Applicant to operate the Applicant's account?</p>
			
			<p>Until you notify us in writing that the authority has been revoked, each of the following persons is authorised to act on your behalf, including giving dealing and other instructions, information and requests and/or receive account information. If more than one person is nominated, we may act on the instructions of any of them unless otherwise advised.</p>
			
			<?php echo $this->Form->radio( "Result.grant_authority", array( "Yes", "No" ) ) ?>
			
			<fieldset class="agent-details">
				<legend>A. Authorised Agent #1</legend>
				
				<fieldset>
					<?php echo $this->Form->input("Result.authorised_agent_title_1", array( 'label' => 'Title', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_given_names_1", array( 'label' => 'Given Names', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_surname_1", array( 'label' => 'Surname', 'type' => 'text' ) ) ?>
		
					<fieldset>
						<?php echo $this->Form->input("Result.authorised_agent_residential_address_1", array( 'label' => 'Residential Address', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_residential_state_1", array( 'label' => 'State', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_residential_postcode_1", array( 'label' => 'Postcode', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<fieldset>
						<?php echo $this->Form->input("Result.authorised_agent_postal_address_1", array( 'label' => 'Postal Address (if different to above)', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_postal_state_1", array( 'label' => 'State', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_postal_postcode_1", array( 'label' => 'Postcode', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<?php echo $this->Form->input("Result.authorised_agent_email_1", array( 'label' => 'Email Address', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_phone_home_1", array( 'label' => 'Tel (H)', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_phone_work_1", array( 'label' => 'Tel (W)', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_mobile_1", array( 'label' => 'Mobile', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_fax_1", array( 'label' => 'Fax', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_dob_1", array( 'label' => 'Date of Birth', 'type' => 'date' ) ) ?>
				</fieldset>
			</fieldset>
			
			<fieldset class="agent-details">
				<legend>B. Authorised Agent #2</legend>
				
				<fieldset>
					<?php echo $this->Form->input("Result.authorised_agent_title_2", array( 'label' => 'Title', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_given_names_2", array( 'label' => 'Given Names', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_surname_2", array( 'label' => 'Surname', 'type' => 'text' ) ) ?>
		
					<fieldset>
						<?php echo $this->Form->input("Result.authorised_agent_residential_address_2", array( 'label' => 'Residential Address', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_residential_state_2", array( 'label' => 'State', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_residential_postcode_2", array( 'label' => 'Postcode', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<fieldset>
						<?php echo $this->Form->input("Result.authorised_agent_postal_address_2", array( 'label' => 'Postal Address (if different to above)', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_postal_state_2", array( 'label' => 'State', 'type' => 'text' ) ) ?>
						<?php echo $this->Form->input("Result.authorised_agent_postal_postcode_2", array( 'label' => 'Postcode', 'type' => 'text' ) ) ?>
					</fieldset>
					
					<?php echo $this->Form->input("Result.authorised_agent_email_2", array( 'label' => 'Email Address', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_phone_home_2", array( 'label' => 'Tel (H)', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_phone_work_2", array( 'label' => 'Tel (W)', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_mobile_2", array( 'label' => 'Mobile', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_fax_2", array( 'label' => 'Fax', 'type' => 'text' ) ) ?>
					<?php echo $this->Form->input("Result.authorised_agent_dob_2", array( 'label' => 'Date of Birth', 'type' => 'date' ) ) ?>
				</fieldset>
			</fieldset>
		</fieldset>
		
		
		<fieldset class="section">
			<legend>5. Resisdency Details For Tax Purposes</legend>
			<p>Are you a resident of Australia for tax purposes?</p>
			
			<?php echo $this->Form->radio( "Result.resisdency_australian_resident", array( 'label' => 'Australian Resident', "Yes", "No" ) ) ?>
			<?php echo $this->Form->input( "Result.resisdency_country_of_residence", array( 'label' => 'Country of Residence', 'type' => 'text' ) ) ?>
		</fieldset>
		
		
		<fieldset class="section">
			<legend>6. Australian Tax File Number or Exemption</legend>
			
			<?php echo $this->Form->input("Result.individual_client_1_tfn", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.individual_client_2_tfn", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.individual_client_3_tfn", array( 'type' => 'text' ) ) ?>
			
			<?php echo $this->Form->input("Result.company_tfn", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.trust_tfn", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.superannuation_fund_tfn", array( 'type' => 'text' ) ) ?>
			
			<p>Quotation of your Australian tax file number(s) (TFN) is optional.</p>
			<p>Penson is an Australian financial service licensee that is authorised by law to request your TFN. You are not required to provide your TFN and failing to provide your TFN to Penson is not an offence. If Penson is unable to quote your tax file number or exemption to registries, it may be obliged to take tax at the highest marginal rate from any dividends, distributions, interest and payments to which you are entitled. Accordingly, failing to provide your TFN or not permitting Penson to quote it in relation to an investment may have taxation consequences. You may wish to seek independent advice in this regard.</p>
			
			<p>By providing a TFN and signing the Application Form you:</p>
	
			<ol>
				<li>appoint Penson as your agent and request and authorise Penson to;
					<ol>
						<li>provide your Tax File Number to all investment bodies with whom Penson acts on your behalf;</li>
						<li>apply your TFN to any investment or account which you may in future make or open with or through Penson (and their related bodies corporate) to which your TFN may lawfully be applied; and</li>
					</ol>
				</li>
				<li>
				acknowledge that this authority will apply until such time as it is revoked in writing to Penson.
				</li>
			</ol>
			
			<p>Despite the other terms in this section, you may instruct Penson in writing at the time of making an investment, not to quote your TFN In relation to that investment.</p>
		</fieldset>
			
		<h3>7. Identification Requirements</h3>
		<div>
			<p>Under the Anti‐Money Laundering and Counter‐Terrorism Financing <strong>(AML/CTF)</strong> legislative regime, certain due diligence must be conducted on any prospective client before certain services may be provided to that person. The due diligence includes verifying a prospective client’s identity. Applications made without providing this information cannot be processed until all the necessary information has been provided.</p>
			<p>The AML/CTF compliance program will also include ongoing customer due diligence and reporting of suspicious matters to AUSTRAC as necessary, which may require your Financial Adviser and/or Penson to collect further information.</p>
		
		
			<h4>Individuals</h4>
			<table>
				<th>To be provided by</th>
				<td>
					<ul>
						<li>each individual client</li>
						<li>each individual who is a trustee</li>
					</ul>
				</td>
			</table>
			
			<p>Please provide certified copies of one Primary Photographic Document OR one document from the Primary Non‐Photographic list AND Secondary Identiciation list for EACH such individual.</p>
			<h5>RELIABLE AND INDEPENDENT VERIFICATION DOCUMENTATION</h5>
			<h5>DO NOT SEND ORIGINALS: CERTIFIED COPIES ONLY</h5>
		
			<h6>Primary Photographic (one proof required)</h6>
			<ul>
				<li>Current photographic Australian driver’s licence</li>
				<li>Current Australian passport</li>
				<li>Current State or Territory photographic ID card</li>
				<li>Current foreign passport*</li>
				<li>Current ID card issued by a foreign government, the United Nations or an agency of the United Nations containing a photograph & signature*</li>
				<li>Current foreign driver’s licence with photograph & date of birth*</li>
			</ul>
		
			<h5>Or</h5>
			
			<h6>Primary Non‐Photographic (one proof required)</h6>
			<ul>
				<li>Birth certificate or birth extract issued by a State or Territory</li>
				<li>Commonwealth citizenship certificate</li>
				<li>Centrelink Pension card</li>
				<li>Health Care card issue by Centrelink</li>
				<li>Foreign citizenship certificate or birth certificate*</li>
			</ul>
			
			<h5>And</h5>
			
			<h6>Secondary Identification (one proof required)</h6>
			<ul>
				<li>Commonwealth, State and Territory financial benefits notice (less than 12 months old)</li>
				<li>ATO Tax notice (less than 12 months old)</li>
				<li>Local government body or utilities provider notice (less than 3 months old) recording provision of services to the person at the address</li>
				<li>Notice issued within the last 3 months by school principal for a person under 18, recording period of time person attended school and person's residential address</li>
			</ul>
			<p># A passport that expired within the two years prior to submitting the application form will also be accepted.</p>
			<p>* Documents that are written in a language that is not English must be accompanied by an English translation prepared by an accredited translator.</p>
			
			<h6>Who may certify your documents as being a true and correct copy of the original</h6>
			
			<ul class="check">
				<li>Legal Practitioner enrolled on the roll of the Supreme Court of a State or Territory, or the High Court of Australia</li>
				<li>a Judge of a court</li>
				<li>a magistrate</li>
				<li>CEO of a Commonwealth Court</li>
				<li>Registrar or deputy registrar of a court</li>
				<li>Justice of the Peace</li>
				<li>Notary public</li>
				<li>Police Officer</li>
				<li>An agent of the Australian Postal Corporation</li>
				<li>Permanent employee of a post office*</li>
				<li>Australian Consular Officer or Diplomatic Officer</li>
				<li>Financial institution officer/employee of a bank*</li>
				<li>A finance company officer*</li>
				<li>Officer of or authorised representative of a holder of an Australian financial services licence*</li>
				<li>A member of the Institute of Chartered Accountants in Australia, CPA Australia or National Institute of Accountants membership*</li>
			</ul>
			
			<p>* Persons marked with an asterisk * must have two or more years of continuous service or membership.</p>
			
			<p>The eligible certifier must include the following information:</p>
			<ul>
				<li>Their full name</li>
				<li>Address</li>
				<li>Telephone number</li>
				<li>The date of certifying</li>
				<li>Capacity in which they are eligible to certify, and</li>
				<li>An official stamp/seal if applicable</li>
			</ul>
			
			<p>The certified copy must include the statement, "I certify that this is a true copy of the original document".</p>
			
			<p>For photographic documents, the certified copy must include the statement, "I certify that this is a true copy of the original document and the photograph is a true likeness".</p>
		
		
			<h4>2. COMPANIES</h4>
			<p>If you are a company or Corporate Trustee, you need to provide the following documents:</p>
			
			<ul>
				<li>A full company search of the ASIC database showing:
					<ol>
						<li>a. the full name of the company;</li>
						<li>b. the ABN;</li>
						<li>c. the registered office address of the company;</li>
						<li>d. the principal place of business of a company;</li>
						<li>e. the names of each director of the company (only for a propriety company),</li>
					</ol>
				</li>
				<li>If the company is a regulated company, a search of the licence or other records of the relevant Commonwealth, State or Territory regulator;</li>
				<li>If the company is listed, a search of the relevant financial market.</li>
				<li>Certified Identification for each director</li>
			</ul>
			
			<h4>3. TRUSTS AND TRUSTEES</h4>
			
			<p>If you are a Trust or Trustee, you need to provide the following documents:</p>
			<p>Reliable and Independent Verification Documentation</p>
			
			<p>Registered managed investment scheme, unregistered managed investment scheme with wholesale clients only which does not make small‐scale offerings under section 1012E, regulated trust (e.g. SMSF) or government superannuation fund</p>
			
			<ul class="check">
				<li>Copy or extract of Trust deed showing full name of trust, that the trust is a registered scheme, regulated trust of superannuation fund.</li>
				<h5>Other Trust Types (e.g. family, unit, charitable, estate)</h5>
				<li>Copy or extract of Trust deed showing full name of trust, that the trust is a registered scheme, regulated trust of superannuation fund.</li>
				<h5>OR</h5>
				<li>Reliable and independent documents relating to the trust*</li>
				<h5>OR</h5>
				<li>Reliable and independent electronic data*</li>
				<h5>OR</h5>
				<li>A combination of above</li>
				<h5>AND</h5>
			</ul>
			
			<p>Where the Trustee is an Individual, verification is to be in accordance with the section for individuals in Section 7(a)</p>
			<p>Where the Trustee is a Company, verification is to be in accordance with the section for Companies in Section7(b)</p>
			
			<p>* Documentation marked with an asterisk * can be from a solicitor, qualified accountant or from the ATO within the last 12 months in relation to the Trust.</p>
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		<fieldset class="section">
			<legend>8. Status</legend>
			<p>Are any of the Applicants, Directors, Responsible Officials, Partners, Authorised Representatives or Beneficiaries of this Account: affiliated with any other Participant of ASX Group; a government official; or having dealings with a government official of any country?</p>
			
			<?php echo $this->Form->radio( "Result.asx_participant_or_official", array( "Yes", "No" ) ) ?>
			<?php echo $this->Form->input("Result.asx_participant_or_official_details", array( 'type' => 'text' ) ) ?>
		</fieldset>
		
		<fieldset class="section">
			<legend>9. Delivery Details for Trade Confirmations</legend>
	
			<?php echo $this->Form->radio( "Result.electronic_communication_confirmation", array( "Yes", "No" ) ) ?>
			<?php echo $this->Form->input( "Result.electronic_communication_confirmation_email_address" ) ?>
			
			<h6>Authorisation of the electronic dispatch of confirmations.</h6>
			<p>The authorisation and agreement in this section apply if you have provided an e‐mail address for the despatch of trade confirmations and signed the Application Form. By doing so you authorise confirmations to be dispatched electronically to:</p>
			<ol>
				<li>you at the e‐mail address provided above;</li>
				<li>(if applicable) another person or organisation (as your agent) to whom you have authorised Penson to send electronic confirmations, at the e‐mail address provided in the Application Form.</li>
			</ol>
			
			<?php echo $this->Form->radio( "Result.copies_of_confirmation_notes", array( "Yes", "No" ) ) ?>
			<p>Penson cannot send your trade confirmations to a third party; however the third party can be provided with a copy of your trade confirmation. If additional copies are required please provide email or fax details:</p>
			
			<?php echo $this->Form->input("Result.additional_email_fax1", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.additional_email_fax2", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.additional_email_fax3", array( 'type' => 'text' ) ) ?>
			
			
			<?php echo $this->Form->input(
				"Result.alternate_communication", array(
					'type' => 'radio',
					'options' => array( 'Fax', 'Post' )
				)
			)
				
			?>
			<p>If you do not wish to receive confirmations via e‐mail please tick one of the below</p>
			
			Please fax Confirmations to below
			<?php echo $this->Form->input("Result.Fax", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.Attn", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.Fax", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.Attn", array( 'type' => 'text' ) ) ?>
			
			<?php echo $this->Form->input("Result.Postal Address", array( 'type' => 'textarea' ) ) ?>
		</fieldset>
		
		<fieldset class="section">
			<legend>10. Chess Sponsorship / Settlement Details</legend>

			<p>In order to complete this section, you should refer to the Explanation of CHESS Sponsorship Agreement and the Penson Sponsorship Agreement in Part F of this document.</p>
			<?php
				echo $this->Form->input(
					"Result.new_sponspred_hin", array(
						'label' => "Would you like Penson to establish a new Sponsored HIN?",
						'type' => 'radio',
						'options' => array( "Yes", "No" )
					)
				) 
			?>
			
			<?php
				echo $this->Form->input(
					"Result.transfer_hin", array(
						'label' => "Would you like to transfer an existing HIN from another broker/sponsor?",
						'type' => 'radio',
						'options' => array( "Yes", "No" )
					)
				) 
			?>
			<?php echo $this->Form->input(
				"Result.transfer_hin_name", array(
					'label' => "If yes, please provide the name of your existing broker/sponsor and existing HIN",
				 	array( 'type' => 'text' )
					)
				)
			?>
			<p>Please note that the HIN transfer cannot be effected until Penson receive a signed Broker to Broker Transfer Authority Form in Part C</p>
			
			<p>If a new HIN is being Issued, would you like to convert its Issuer Sponsored holdings of financial products to its Penson HIN?</p>
			<?php echo $this->Form->radio( "Result.new_hin", array( "Yes", "No" ) ) ?>
			
			
			<?php //.. TODO: Should I be uploading stuff here ?>
			<p>(Please attach current copies of Issuer Sponsored Statements for all financial products being converted)</p>
			<?php //$this->Form->file( 'Result.hin_uploads' ) ?>
			
			<p>Would you like to settle your transactions via a third party settlement participant (i.e. non CHESS sponsored / DVP)?</p>
			<?php
			
				echo $this->Form->input(
					"Result.third_party_hin_settlement", array(
						'type' => 'radio',
						'options' => array( "Yes", "No" ) 
					)
				) 
			?>
			
			<?php echo $this->Form->input("Result.Participant", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.PID", array( 'type' => 'text' ) ) ?>
			<?php echo $this->Form->input("Result.HIN", array( 'type' => 'text' ) ) ?>
		</fieldset>
		
		<fieldset class="section">
			<legend>11. Direct Debit / Credit Authority</legend>
			
			<p>In order to complete this section, the Applicant should refer to Penson’s Direct Debit Request & Service Agreement [PART G]. For Direct Debits all bank account holders must sign this section.</p>
			
			<fieldset class="credit-authority-details">
				<p><strong>Default/Nominated Bank Account</strong> The Applicant authorises Penson to directly credit/debit* the Nominated Bank Account.</p>
				
				<?php
					echo $this->Form->input( "Result.first_nominated_bank_account", array(
							'type' => 'radio',
							'options' => array("Credit", "Debit", "Both" )
						)
					)
				?>
				
				<?php
					echo $this->Form->input(
						'Result.bank_institution_name', array(
							'type' => 'text',
							'label' => "Result.Financial Institution / Bank Name"
						)
					) 
				?>
				
				<?php echo $this->Form->input("Result.account_ame", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.bsb", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Account Number", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Bank Account Holder Name", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Signature", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Second Bank Account Holder Name (if account is in joint names)", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Third Bank Account Holder Name (if account is in joint names)", array( 'type' => 'text' ) ) ?>
			</fieldset>
			
			<fieldset class="credit-authority-details">
				<p>If there is a second Nominated Bank Account, please provide details below:</p>
				<p>Non Default/Secondary Bank Account The Applicant authorises Penson to directly credit/debit* the Nominated Bank Account.</p>
				
				<?php
					echo $this->Form->input( "Result.second_nominated_bank_account", array(
							'type' => 'radio',
							'options' => array("Credit", "Debit", "Both" )
						)
					)
				?>
				
				<?php echo $this->Form->input("Result.Financial Institution / Bank Name", array( 'type' => 'text' ) ) ?>
				
				<?php echo $this->Form->input("Result.Account Name", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.BSB", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Account Number", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Bank Account Holder Name", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Signature", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Second Bank Account Holder Name (if account is in joint names)", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("Result.Third Bank Account Holder Name (if account is in joint names)", array( 'type' => 'text' ) ) ?>
			</fieldset>
		</fieldset>
		
		<fieldset class="section">
			<legend>12. Income Direction</legend>
			
			<p>I / we will be CHESS Sponsored by Penson and I/we authorised CHESS and Penson to severally advise the relevant Issuer or its nominee to pay by direct credit to the Nominated Bank Account(s) (as specified in Section 11 of this Application Form) all cash dividends, distributions, interest or income payable referable to my/our HIN</p>
			
			<?php echo $this->Form->checkbox( "Result.chess_and_penson_athorise", array('hiddenField' => false) ) ?>
		
			<p>By ticking this box, whenever you purchase financial products which are CHESS sponsored by Penson, Penson will pass your banking details via CHESS to the issuer’s share registry. This instruction will override all previous instructions you may have given Penson or CHESS or the relevant issuer, including any Dividend Reinvestment Plans (DRP) instructions. This instruction only applies to holdings sponsored by Penson in CHESS. For other holdings, contact the Issuer directly. All cash dividends paid for financial products held under your HIN will be directed into the Nominated Bank Account specified in Section 11 of this Application Form. Note that by providing this instruction, it may override your participation in any existing DRP or Bonus Share Plans.</p>
		</fieldset>
		
		<h3>13. Acknowledgements</h3>
		<div>
			<p>The Applicant acknowledges that it has received, read and understood the following documentation:</p>
			<ol>
				<li>Penson's Explanation of CHESS Sponsorship Agreement [Part F]</li>
				<li>Penson's Financial Services Guide [Part K]</li>
				<li>Penson's Privacy Statement [Part J]</li>
				<li>Penson's PDS for Exchange Traded Options [Part H] – for Options clients only</li>
			</ol>
		</div>
		
		<h3>14. AGREEMENT TO BE BOUND BY DOCUMENTATION</h3>
		<div>
			<p>By signing the application form below, the Applicant acknowledges that it has received and read, and the Applicant agrees to be bound by, the following documentation</p>
			<ol>
				<li>Penson's Terms and Condition [ Part E]</li>
				<li>Penson's Sponsorship Agreement [ Part F]</li>
				<li>Penson's Direct Debit Request and Service Agreement [ Part G]</li>
				<li>Penson's Derivatives Client Agreement – [Part I] for Options clients only</li>
				<li>Authorisation for electronic confirmations [ Part A: Section 9 of Client Application Form]</li>
				<li>Tax File Number Details [Part A: Section 6 of the Client Application Form]</li>
			</ol>
		</div>
		
		<fieldset id="individuals-signiture" class="section">
			<legend>15. Individual Clients to Complete</legend>
			
			<fieldset>
				<?php echo $this->Form->input("Result.individual_1_fullname", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("NA.individual_1_signiture", array( 'type' => 'text', 'disabled' => 'disabled' ) ) ?>
				<?php echo $this->Form->input("Result.individual_1_date", array( 'type' => 'date', 'label' => 'Date' ) ) ?>
			</fieldset>
			
			<fieldset>
				<?php echo $this->Form->input("Result.individual_2_fullname", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("NA.individual_2_signiture", array( 'type' => 'text', 'disabled' => 'disabled' ) ) ?>
				<?php echo $this->Form->input("Result.individual_2_date", array( 'type' => 'date', 'label' => 'Date' ) ) ?>
			</fieldset>
			
			<fieldset>
				<?php echo $this->Form->input("Result.individual_3_fullname", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("NA.individual_3_signiture", array( 'type' => 'text', 'disabled' => 'disabled' ) ) ?>
				<?php echo $this->Form->input("Result.individual_3_date", array( 'type' => 'date', 'label' => 'Date' ) ) ?>
			</fieldset>
		</fieldset>
		
		<fieldset id="individuals-signiture" class="section">
			<legend>16. Corporate / Company Clients to Complete</legend>
			
			<p>(Please note that two Directors or a director and a Secretary must sign. Indicate if the Company is a Sole Director/Sole Secretary Company.)</p>
			
			<?php echo $this->Form->input("Result.Name of Company", array( 'type' => 'text' ) ) ?>
			
			<fieldset>
				<?php echo $this->Form->input("Result.director_full_name", array( 'type' => 'text' ) ) ?>
				<?php echo $this->Form->input("NA.director_signiture", array( 'type' => 'text', 'disabled' => 'disabled' ) ) ?>
				<?php echo $this->Form->input("Result.date", array( 'type' => 'date' ) ) ?>
			</fieldset>
			
			<fieldset>
				<?php
					echo $this->Form->input(
						"Result.director_secretary_full_name", array(
							'label' => "Director / Secretary: Full name",
							'type' => 'text'
						)
					)
				?>
				
				<?php echo $this->Form->input("NA.director_secretary_signiture", array( 'type' => 'text', 'disabled' => 'disabled' ) ) ?>
				
				<?php
					echo $this->Form->input(
						"Result.director_secretary_date", array(
							'label' => 'Date',
							'type' => 'date'
						)
					)
				?>
			</fieldset>
			
			<h4>DECLARATION</h4>
			<p>By signing this application form, you agree, represent and warrant that you:</p>
			<ul>
				<li>Agree to be bound by the terms and conditions contained within the application.</li>
				<li>Are over the age of 18 years and not of any legal disability.</li>
				<li>Have quoted your tax file number (TFN), Australian Business Number (ABN) or exemption (on the basis that we will comply with the law that authorises and governs its collection, storage, security and disposal).</li>
				<li>Understand that if you do not provide your TFN, ABN or exemption, tax at the highest marginal rate plus Medicare levy may be deducted from your income</li>
			</ul>
		</fieldset>
	
<?php echo $this->Form->end(__('Submit'));?>
</div>