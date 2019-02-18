Feature: Greeting
	In order to be nice
	As a polite PHP script
	I need to say hello to my user

	Scenario: Default greeting is to the World
		Given I am on the homepage
		Then I should see "Hello, World!"