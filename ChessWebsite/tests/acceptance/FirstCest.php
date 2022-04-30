<?php

use Codeception\Util\HttpCode;

class FirstCest
{
    public function canVisitWebsiteRoot(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    public function canVisitLoginPage(AcceptanceTester $I)
    {
        $I->amOnPage('/?Home=Login');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    public function canVisitChessPage(AcceptanceTester $I)
    {
        $I->amOnPage('/?Home=ChessOnline');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    public function canNotSeeInNavBar(AcceptanceTester $I) {
        $I->amOnPage('/');
        $I->dontSeeLink("Profile", "Home/Profile");
        $I->dontSeeLink("Competitions", "Home/Competitions");
    }

    public function seeRulesTextSomewhere(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Rules');
    }

    public function seeRegisterLinkInLogin(AcceptanceTester $I)
    {
        $I->amOnPage('Login');
        $I->seeLink('Register Here');
        $I->dontSeeLink('Logout');
    }
}
