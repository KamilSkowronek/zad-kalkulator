Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by KamilSkowronek"
    And I fill in "a" with "14"
    And I fill in "b" with "14"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 28"