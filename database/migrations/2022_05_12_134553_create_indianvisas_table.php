<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indianvisas', function (Blueprint $table) {
            $table->id();
            $table->string('countrynameId', 12)->nullable();
            $table->string('missioncodeId', 12)->nullable();
            $table->string('nationalityId', 12)->nullable();
            $table->string('dobId', 20)->nullable();
            $table->string('emailId', 100)->nullable();
            $table->string('emailReId', 100)->nullable();
            $table->string('jouryneyId', 12)->nullable();
            $table->integer('visaService')->length(5)->unsigned()->nullable();
            $table->integer('purpose')->length(5)->unsigned()->nullable();
            $table->string('surname', 100)->nullable();
            $table->string('givenName', 100)->nullable();
            $table->boolean('changedSurnameCheck')->nullable();;
            $table->string('prevSurname', 100)->nullable();;
            $table->string('prevGivenName', 100)->nullable();;
            $table->string('gender', 5)->nullable();
            $table->string('birthPlace', 100)->nullable();
            $table->string('countryBirth', 10)->nullable();
            $table->string('nicNumber', 20)->nullable();
            $table->string('religion', 10)->nullable();
            $table->string('identityMarks')->nullable();
            $table->string('education', 100)->nullable();
            $table->string('nationalityBy', 10)->nullable();
            $table->string('passportNo', 12)->nullable();
            $table->string('passportIssuePlace', 100)->nullable();
            $table->string('passportIssueDate', 100)->nullable();
            $table->string('passportExpiryDate', 20)->nullable();
            $table->string('otherPpt2', 10)->nullable();
            $table->string('presAdd1')->nullable();
            $table->string('presAdd2')->nullable();
            $table->string('presCountry', 12)->nullable();
            $table->string('presAdd3')->nullable();
            $table->string('pincode', 10)->nullable();
            $table->string('presPhone', 20)->nullable();
            $table->string('isdCode1', 5)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('sameAddressId', 10)->nullable();
            $table->string('permAddress1')->nullable();
            $table->string('permAddress2')->nullable();
            $table->string('permAddress3')->nullable();
            $table->string('fthrname')->nullable();
            $table->string('fatherNationality', 12)->nullable();
            $table->string('fatherPreviousNationality', 12)->nullable();
            $table->string('fatherPlaceOfBirth', 100)->nullable();
            $table->string('fatherCountryOfBirth', 12)->nullable();
            $table->string('motherName')->nullable();
            $table->string('motherNationality', 12)->nullable();
            $table->string('motherPreviousNationality', 12)->nullable();
            $table->string('motherPlaceOfBirth', 100)->nullable();
            $table->string('motherCountryOfBirth', 12)->nullable();
            $table->string('maritalStatus', 20)->nullable();
            $table->string('spouseName')->nullable();
            $table->string('spouseNationality', 12)->nullable();
            $table->string('spousePreviousNationality', 12)->nullable();
            $table->string('spousePlaceOfBirth', 100)->nullable();
            $table->string('spouseCountryOfBirth', 12)->nullable();
            $table->string('grandparentFlag2', 20)->nullable();
            $table->string('occupation')->nullable();
            $table->string('occFlag', 20)->nullable();
            $table->string('occupationOther')->nullable();
            $table->string('empname')->nullable();
            $table->string('empdesignation')->nullable();
            $table->string('empaddress')->nullable();
            $table->string('empphone', 20)->nullable();
            $table->string('previousOccupation')->nullable();
            $table->string('prevOrg2')->nullable();
            $table->string('touPov1')->nullable();
            $table->string('touPov2')->nullable();
            $table->string('duration', 10)->nullable();
            $table->string('visaEntryId', 20)->nullable();
            $table->string('entrypoint')->nullable();
            $table->string('exitpointprc')->nullable();
            $table->string('oldVisaFlag', 20)->nullable();
            $table->string('prvVisitAdd1')->nullable();
            $table->string('prvVisitAdd2')->nullable();
            $table->string('prvVisitAdd3')->nullable();
            $table->string('visitedCity', 512)->nullable();
            $table->string('oldVisaNo', 20)->nullable();
            $table->string('oldVisaTypeId')->nullable();
            $table->string('oldvisaissueplace')->nullable();
            $table->string('oldvisaissuedate', 20)->nullable();
            $table->string('refuseFlag', 10)->nullable();
            $table->string('refuseDetails')->nullable();
            $table->string('countryVisited', 512)->nullable();
            $table->string('saarcFlag2', 20)->nullable();
            $table->string('nameofsponsorInd')->nullable();
            $table->string('add1ofsponsorInd')->nullable();
            $table->string('add2ofsponsorInd')->nullable();
            $table->string('stateofsponsorInd')->nullable();
            $table->string('districtofsponsorInd')->nullable();
            $table->string('phoneofsponsorInd', 20)->nullable();
            $table->string('nameofsponsorMsn')->nullable();
            $table->string('add1ofsponsorMsn')->nullable();
            $table->string('add2ofsponsorMsn')->nullable();
            $table->string('phoneofsponsorMsn', 20)->nullable();
            $table->string('hsptNameMsn')->nullable();
            $table->string('hsptAddMsn')->nullable();
            $table->string('docNameMsn')->nullable();
            $table->string('phMsn', 20)->nullable();
            $table->string('emailMsn', 100)->nullable();
            $table->string('hsptNameInd')->nullable();
            $table->string('hsptAddInd')->nullable();
            $table->string('docNameInd')->nullable();
            $table->string('phInd', 20)->nullable();
            $table->string('emailInd', 100)->nullable();
            $table->string('illness')->nullable();
            $table->string('radioNameOne', 5)->nullable();
            $table->string('radioNameTwo', 5)->nullable();
            $table->string('radioNameThree', 5)->nullable();
            $table->string('radioNameFour', 5)->nullable();
            $table->string('radioNameFive', 5)->nullable();
            $table->string('radioNameSix', 5)->nullable();
            $table->boolean('verifyQuestions')->nullable();
            $table->string('placeOfStay1')->nullable();
            $table->string('posAddress1')->nullable();
            $table->string('posStateId1')->nullable();
            $table->string('posDistId1')->nullable();
            $table->string('posEmail1', 100)->nullable();
            $table->string('posPhone1', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indianvisas');
    }
};