<?php

$t = time();

?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>CarQuest W2</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400" />
    <link rel="stylesheet" href="w2.css?t=<?= $t ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="w2.js?t=<?= $t ?>"></script>
</head>

<body>
    <h1>CarQuest W2</h1>
    <label>
        Business eFile Number (BEN):
        <input type="text" name="ben" maxlength="8" />
    </label>
    <form class="submitter">
        <h3>Submitter Record</h3>
        <input type="hidden" name="record-id" value="RA" maxlength="2" />
        <label>
            Submitter's EIN:
            <input type="text" name="submitter-ein" pattern="\d*" maxlength="9" />
        </label>
        <label>
            User ID: (BSO)
            <input type="text" name="user-id" maxlength="8" />
        </label>
        <input type="hidden" name="software-vendor-code" value=" " maxlength="4" />
        <input type="hidden" name="blanks" value=" " maxlength="5" />
        <input type="hidden" name="resub" value="0" maxlength="1" />
        <input type="hidden" name="wfid" value=" " maxlength="6" />
        <input type="hidden" name="sofware-code" value="98" maxlength="2" />
        <label>
            Company Name:
            <input type="text" name="company-name" maxlength="57" />
        </label>
        <label>
            Company Location Address:
            <input type="text" name="company-location-address" maxlength="22" />
        </label>
        <label>
            Company Delivery Address:
            <input type="text" name="company-delivery-address" maxlength="22" />
        </label>
        <label>
            Company City:
            <input type="text" name="company-city" maxlength="22" />
        </label>
        <label>
            Company State Abbreviation:
            <input type="text" name="company-state-abbreviation" maxlength="2" />
        </label>
        <label>
            Company ZIP Code:
            <input type="text" name="company-zipcode" maxlength="5" />
        </label>
        <label>
            Company Zip Code Extension:
            <input type="text" name="company-zipcode-extension" maxlength="4" />
        </label>
        <input type="hidden" name="blank" value=" " maxlength="5" />
        <input type="hidden" name="company-foreign-state" value=" " maxlength="23" />
        <input type="hidden" name="company-foreign-postal" value=" " maxlength="15" />
        <input type="hidden" name="company-country-code" value=" " maxlength="2" />
        <label>
            Submitter Name (Organization):
            <input type="text" name="submitter-submitter-name" maxlength="57" />
        </label>
        <label>
            Submitter Location Address:
            <input type="text" name="submitter-location-address" maxlength="22" />
        </label>
        <label>
            Submitter Delivery Address:
            <input type="text" name="submitter-delivery-address" maxlength="22" />
        </label>
        <label>
            Submitter City:
            <input type="text" name="submitter-city" maxlength="22" />
        </label>
        <label>
            Submitter State Abbreviation:
            <input type="text" name="company-state-abbreviation" maxlength="2" />
        </label>
        <label>
            Submitter ZIP Code:
            <input type="text" name="submitter-zipcode" maxlength="5" />
        </label>
        <label>
            Submitter ZIP Code Extension:
            <input type="text" name="submitter-zipcode-extension" maxlength="4" />
        </label>
        <input type="hidden" name="blank" value=" " maxlength="5" />
        <input type="hidden" name="submitter-foreign-state" value=" " maxlength="23" />
        <input type="hidden" name="submitter-foreign-postal" value=" " maxlength="15" />
        <input type="hidden" name="submitter-country-code" value=" " maxlength="2" />
        <label>
            Contact Name:
            <input type="text" name="contact-name" maxlength="27" />
        </label>
        <label>
            Contact Phone Number:
            <input type="text" name="contact-phone-number" pattern="\d*" maxlength="15" />
        </label>
        <input type="hidden" name="contact-phone-extension" value=" " maxlength="5" />
        <input type="hidden" name="blank" value=" " maxlength="3" />
        <label>
            Contact Email:
            <input type="text" name="contact-email" value=" " maxlength="40" />
        </label>
        <input type="hidden" name="blank" value=" " maxlength="3" />
        <input type="hidden" name="contact-fax" value=" " maxlength="10" />
        <input type="hidden" name="blank" value="1" maxlength="1" />
        <input type="hidden" name="preparer-code" value="L" maxlength="1" />
        <input type="hidden" name="blank" value=" " maxlength="12" />
    </form>
    <form class="employer">
        <h3>Employer Record</h3>
        <input type="hidden" name="record-id" value="RE" maxlength="2" />
        <label>
            Tax Year:
            <input type="text" name="tax-year" maxlength="4" />
        </label>
        <input type="hidden" name="agent-indicator-code" value=" " maxlength="1" />
        <label>
            Employer EIN:
            <input type="text" name="employer-ein" pattern="\d*" maxlength="9" />
        </label>
        <input type="hidden" name="agent-for-ein" value=" " maxlength="9" />
        <input type="hidden" name="terminating-business-indicator" value="0" maxlength="1" />
        <label>
            Establishment Number:
            <input type="text" name="establishment-number" value=" " maxlength="4" />
        </label>
        <input type="hidden" name="other-ein" value=" " maxlength="9" />
        <label>
            Employer Name:
            <input type="text" name="employer-name" maxlength="57" />
        </label>
        <label>
            Employer Location Address:
            <input type="text" name="employer-location-address" maxlength="22" />
        </label>
        <label>
            Employer Delivery Address:
            <input type="text" name="employer-delivery-address" maxlength="22" />
        </label>
        <label>
            Employer City:
            <input type="text" name="employer-city" maxlength="22" />
        </label>
        <label>
            Employer State Abbreviation:
            <input type="text" name="employer-state-abbreviation" maxlength="2" />
        </label>
        <label>
            Employer ZIP Code:
            <input type="text" name="employer-zipcode" maxlength="5" />
        </label>
        <label>
            Employer Zip Code Extension:
            <input type="text" name="company-zipcode-extension" maxlength="4" />
        </label>
        <input type="hidden" name="kind-of-employer" value="N" maxlength="1" />
        <input type="hidden" name="blank" value=" " maxlength="4" />
        <input type="hidden" name="employer-foreign-state" value=" " maxlength="23" />
        <input type="hidden" name="employer-foreign-postal" value=" " maxlength="15" />
        <input type="hidden" name="employer-country-code" value=" " maxlength="2" />
        <label>
            Employment Code: (A = Agriculture 943; R = Regular 941)
            <input type="text" name="employment code" maxlength="1" />
        </label>
        <input type="hidden" name="tax-jurisdiction" value=" " maxlength="1" />
        <input type="hidden" name="third-party-sick-pay" value="0" maxlength="1" />
        <label>
            Contact Name:
            <input type="text" name="contact-name" maxlength="27" />
        </label>
        <label>
            Contact Phone Number:
            <input type="text" name="contact-phone-number" pattern="\d*" maxlength="15" />
        </label>
        <input type="hidden" name="contact-phone-extension" value=" " maxlength="5" />
        <input type="hidden" name="contact-fax-number" value=" " maxlength="10" />
        <label>
            Contact Email:
            <input type="text" name="contact-email" value=" " maxlength="40" />
        </label>
        <input type="hidden" name="blank" value=" " maxlength="194" />
    </form>
    <div class="employee-and-state">
    <form class="employee">
        <h3>Employee Wage Record</h3>
        <input type="hidden" name="record-id" value="RW" maxlength="2" />
        <label>
            Social Security Number:
            <input type="text" name="employee-ssn" pattern="\d*" maxlength="9" />
        </label>
        <label>
            First Name:
            <input type="text" name="employee-first-name" maxlength="15" />
        </label>
        <label>
            Middle Name or Initial:
            <input type="text" name="employee-middle-name" maxlength="15" />
        </label>
        <label>
            Last Name:
            <input type="text" name="employee-first-name" maxlength="20" />
        </label>
        <label>
            Suffix:
            <input type="text" name="employee-suffix" maxlength="4" />
        </label>
        <label>
            Location Address:
            <input type="text" name="employee-location-address" maxlength="22" />
        </label>
        <label>
            Delivery Address:
            <input type="text" name="employee-delivery-address" maxlength="22" />
        </label>
        <label>
            City:
            <input type="text" name="employee-city" maxlength="22" />
        </label>
        <label>
            State Abbreviation:
            <input type="text" name="employee-state-abbreviation" maxlength="2" />
        </label>
        <label>
            ZIP Code:
            <input type="text" name="employee-zipcode" maxlength="5" />
        </label>
        <label>
            Zip Code Extension:
            <input type="text" name="employee-zipcode-extension" maxlength="4" />
        </label>
        <input type="hidden" name="blank" value=" " maxlength="5" />
        <input type="hidden" name="employee-foreign-state" value=" " maxlength="23" />
        <input type="hidden" name="employee-foreign-postal" value=" " maxlength="15" />
        <input type="hidden" name="employee-country-code" value=" " maxlength="2" />
        <label>
            Wages, Tips, and Other Compensation:
            <input type="text" class="money" name="wages" maxlength="11" />
        </label>
        <label>
            Federal Income Tax Withheld:
            <input type="text" class="money" name="federal-income-tax-withheld" maxlength="11" />
        </label>
        <label>
            Social Security Wages:
            <input type="text" class="money" name="social-security-wages" maxlength="11" />
        </label>
        <label>
            Social Security Tax Withheld:
            <input type="text" class="money" name="social-security-tax-withheld" maxlength="11" />
        </label>
        <label>
            Medicare Wages and Tips:
            <input type="text" class="money" name="medicare-wages" maxlength="11" />
        </label>
        <label>
            Medicare Tax Withheld:
            <input type="text" class="money" name="medicare-tax-withheld" maxlength="11" />
        </label>
        <input type="hidden" class="money" name="social-security-tips" maxlength="11" />
        <input type="hidden" name="blank" value=" " maxlength="11" />
        <input type="hidden" class="money" name="dependent-care-benefits" maxlength="11" />
        <input type="hidden" class="money" name="deferred-401k" maxlength="11" />
        <input type="hidden" class="money" name="deferred-403b" maxlength="11" />
        <input type="hidden" class="money" name="deferred-408k6" maxlength="11" />
        <input type="hidden" class="money" name="deferred-457b" maxlength="11" />
        <input type="hidden" class="money" name="deferred-501c18D" maxlength="11" />
        <input type="hidden" name="blank" value=" " maxlength="11" />
        <input type="hidden" class="money" name="nonqualified-457" maxlength="11" />
        <input type="hidden" class="money" name="hsa-contributions" maxlength="11" />
        <input type="hidden" class="money" name="nonqualified-not-457" maxlength="11" />
        <input type="hidden" class="money" name="nontaxable-combat-pay" maxlength="11" />
        <input type="hidden" name="blank" maxlength="11" />
        <input type="hidden" class="money" name="group-term-life-insurance" maxlength="11" />
        <input type="hidden" class="money" name="income-from-nonstatutory-stock-options" maxlength="11" />
        <input type="hidden" class="money" name="deferrals-nonqualified-409a" maxlength="11" />
        <input type="hidden" class="money" name="roth-contributions-401k" maxlength="11" />
        <input type="hidden" class="money" name="roth-contributions-403b" maxlength="11" />
        <input type="hidden" class="money" name="employer-sponsored-health-coverage" maxlength="11" />
        <input type="hidden" class="money" name="small-employer-health-reimbursement" maxlength="11" />
        <input type="hidden" name="blank" value=" " maxlength="1" />
        <input type="hidden" name="statutory-employee" value="0" maxlength="1" />
        <input type="hidden" name="blank" value=" " maxlength="1" />
        <input type="hidden" name="retirement-plan" value="0" maxlength="1" />
        <input type="hidden" name="third-party-sick-pay" value="0" maxlength="1" />
        <input type="hidden" name="blank" value=" " maxlength="23" />
    </form>
    <form class="state">
        <h3>State Wage Record</h3>
        <input type="hidden" name="record-id" value="RS" maxlength="2" />
        <input type="hidden" name="state-code" value="19" maxlength="2" />
        <input type="hidden" name="taxing-entity-code" value=" " maxlength="5" />
        <label>
            Social Security Number:
            <input type="text" name="employee-ssn" pattern="\d*" maxlength="9" />
        </label>
        <label>
            First Name:
            <input type="text" name="employee-first-name" maxlength="15" />
        </label>
        <label>
            Middle Name or Initial:
            <input type="text" name="employee-middle-name" maxlength="15" />
        </label>
        <label>
            Last Name:
            <input type="text" name="employee-first-name" maxlength="20" />
        </label>
        <label>
            Suffix:
            <input type="text" name="employee-suffix" maxlength="4" />
        </label>
        <label>
            Location Address:
            <input type="text" name="employee-location-address" maxlength="22" />
        </label>
        <label>
            Delivery Address:
            <input type="text" name="employee-delivery-address" maxlength="22" />
        </label>
        <label>
            City:
            <input type="text" name="employee-city" maxlength="22" />
        </label>
        <label>
            State Abbreviation:
            <input type="text" name="employee-state-abbreviation" maxlength="2" />
        </label>
        <label>
            ZIP Code:
            <input type="text" name="employee-zipcode" maxlength="5" />
        </label>
        <label>
            Zip Code Extension:
            <input type="text" name="employee-zipcode-extension" maxlength="4" />
        </label>
        <input type="hidden" name="blank" value=" " maxlength="5" />
        <input type="hidden" name="employee-foreign-state" value=" " maxlength="23" />
        <input type="hidden" name="employee-foreign-postal" value=" " maxlength="15" />
        <input type="hidden" name="employee-country-code" value=" " maxlength="2" />
        <input type="hidden" name="unemployment-info" value=" " maxlength="48" />
        <input type="hidden" name="blank" value=" " maxlength="5" />
        <label>
            State Employer Account Number: (12-digit state online number)
            <input type="text" class="right" name="state-employer-account-number" pattern="\d*" maxlength="20" />
        </label>
        <input type="hidden" name="blank" value=" " maxlength="6" />
        <input type="hidden" name="state-code" value="19" maxlength="2" />
        <label>
            State Taxable Wages:
            <input type="text" class="money" name="state-taxable-wages" maxlength="11" />
        </label>
        <label>
            State Income Tax Withheld:
            <input type="text" class="money" name="state-income-tax-withheld" maxlength="11" />
        </label>
        <input type="hidden" name="other-state-data" value=" " maxlength="10" />
        <input type="hidden" name="tax-type-code" value=" " maxlength="1" />
        <input type="hidden" class="money" name="local-taxable-wages" maxlength="11" />
        <input type="hidden" class="money" name="local-income-tax-withheld" maxlength="11" />
        <input type="hidden" name="state-control-number" value=" " maxlength="7" />
        <input type="hidden" name="supplemental-data-1" value=" " maxlength="75" />
        <input type="hidden" name="supplemental-data-2" value=" " maxlength="75" />
        <input type="hidden" name="blank" value=" " maxlength="25" />
        
        <button type="button" class="add-employee">Add Employee</button>
    </form>
    </div>
    <form class="total">
        <h3>Total Record</h3>
        <input type="hidden" name="record-id" value="RT" maxlength="2" />
        <label>
            Number of Employees:
            <input type="text" class="right" name="number-of-rw-records" value="1" maxlength="7" />
        </label>
        <label>
            Total Wages, Tips, and Other Compensation:
            <input type="text" class="money" name="total-wages" maxlength="15" />
        </label>
        <label>
            Total Federal Income Tax Withheld:
            <input type="text" class="money" name="total-federal-income-tax-withheld" maxlength="15" />
        </label>
        <label>
            Total Social Security Wages:
            <input type="text" class="money" name="total-social-security-wages" maxlength="15" />
        </label>
        <label>
            Total Social Security Tax Withheld:
            <input type="text" class="money" name="total-social-security-tax-withheld" maxlength="15" />
        </label>
        <label>
            Total Medicare Wages and Tips:
            <input type="text" class="money" name="total-medicare-wages" maxlength="15" />
        </label>
        <label>
            Total Medicare Tax Withheld:
            <input type="text" class="money" name="total-medicare-tax-withheld" maxlength="15" />
        </label>
        <input type="hidden" class="money" name="total-social-security-tips" maxlength="15" />
        <input type="hidden" name="blank" value=" " maxlength="15" />
        <input type="hidden" class="money" name="total-dependent-care-benefits" maxlength="15" />
        <input type="hidden" class="money" name="total-deferred-401k" maxlength="15" />
        <input type="hidden" class="money" name="total-deferred-403b" maxlength="15" />
        <input type="hidden" class="money" name="total-deferred-408k6" maxlength="15" />
        <input type="hidden" class="money" name="total-deferred-457b" maxlength="15" />
        <input type="hidden" class="money" name="total-deferred-501c18D" maxlength="15" />
        <input type="hidden" name="blank" value=" " maxlength="15" />
        <input type="hidden" class="money" name="total-nonqualified-457" maxlength="15" />
        <input type="hidden" class="money" name="total-hsa-contributions" maxlength="15" />
        <input type="hidden" class="money" name="total-nonqualified-not-457" maxlength="15" />
        <input type="hidden" class="money" name="total-nontaxable-combat-pay" maxlength="15" />
        <input type="hidden" name="blank" maxlength="15" />
        <input type="hidden" class="money" name="total-group-term-life-insurance" maxlength="15" />
        <input type="hidden" class="money" name="total-income-from-nonstatutory-stock-options" maxlength="15" />
        <input type="hidden" class="money" name="total-deferrals-nonqualified-409a" maxlength="15" />
        <input type="hidden" class="money" name="total-roth-contributions-401k" maxlength="15" />
        <input type="hidden" class="money" name="total-roth-contributions-403b" maxlength="15" />
        <input type="hidden" class="money" name="total-employer-sponsored-health-coverage" maxlength="15" />
        <input type="hidden" class="money" name="total-small-employer-health-reimbursement" maxlength="15" />
        <input type="hidden" name="blank" maxlength="98" />
    </form>
    <form class="state-total">
        <h3>State of Iowa Total Record</h3>
        <input type="hidden" name="record-id" value="RV" maxlength="2" />
        <label>
            Number of Employees:
            <input type="text" class="right" name="number-of-rs-records" value="1" maxlength="7" />
        </label>
        <label>
            Total State Taxable Wages:
            <input type="text" class="money" name="total-state-taxable-wages" maxlength="15" />
        </label>
        <label>
            Total State Income Tax Withheld:
            <input type="text" class="money" name="total-state-income-tax-withheld" maxlength="15" />
        </label>
        <input type="hidden" name="state-ben" maxlength="8" />
        <input type="hidden" class="right" name="iowa-confirmation-number" value="0" maxlength="10" />
        <input type="hidden" name="blank" value=" " maxlength="455" />
    </form>
    <form class="final">
        <input type="hidden" name="record-id" value="RF" maxlength="2" />
        <input type="hidden" name="blank" value=" " maxlength="5" />
        <input type="hidden" class="right" name="number-of-rs-records" value="1" maxlength="9" />
        <input type="hidden" name="blank" value=" " maxlength="496" />
    </form>
    <a class="download" href="data:text/plain;charset=ascii," download="IAW2-ben#-date.txt">Download Record</a>
</body>
    
</html>
