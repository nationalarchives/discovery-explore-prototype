<div class="user-collaboration">
    <div class="found-an-error">
        <button class="close-this"><img src="images/close.svg"></button>
        <form action="#" id="suggest-a-correction-form" method="post" novalidate="novalidate">
            <h2 class="inline">Found an error?</h2>
            <div class="suggestion-form-wrapper">
                <p>Fields marked with <span class="indicate-mandatory-form-element">*</span> are mandatory.</p>
                <div class="first-form-field-group">
                    <label for="fieldContainingError">Which field contains the error? <span
                                class="indicate-mandatory-form-element">*</span></label>
                    <span class="field-validation-valid" data-valmsg-for="Field" data-valmsg-replace="true"></span>
                    <select data-val="true" data-val-required="This field is required" id="fieldContainingError"
                            name="Field">
                        <option value="">Select from list</option>
                        <option>Access conditions</option>
                        <option>Arrangement</option>
                        <option>Creator</option>
                        <option>Date</option>
                        <option>Description</option>
                        <option>Former references</option>
                        <option>Held by</option>
                        <option>Language</option>
                        <option>Legal status</option>
                        <option>Note</option>
                        <option>Other</option>
                        <option>Physical description</option>
                        <option>Reference</option>
                        <option>Related Material</option>
                        <option>Separated Material</option>
                        <option>Title</option>
                    </select>
                </div>
                <div class="form-field-group">
                    <label for="whatIsTheError">What is the error? <span
                                class="indicate-mandatory-form-element">*</span></label>
                    <span class="field-validation-valid" data-valmsg-for="Description"
                          data-valmsg-replace="true"></span>
                    <textarea cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters"
                              data-val-length-max="1000" data-val-required="This field is required" id="whatIsTheError"
                              name="Description" rows="2"></textarea>
                </div>
                <div class="form-field-group">
                    <label for="whatIsTheRecommendation">What is the correct information? <span
                                class="indicate-mandatory-form-element">*</span></label>
                    <span class="field-validation-valid" data-valmsg-for="Recommendation"
                          data-valmsg-replace="true"></span>
                    <textarea cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters"
                              data-val-length-max="1000" data-val-required="This field is required"
                              id="whatIsTheRecommendation"
                              name="Recommendation" rows="2"></textarea>
                </div>
                <div class="form-field-group">
                    <label for="referenceDetails" id="reference-details-label"> Have you seen this error elsewhere?
                        Please
                        provide reference details</label>
                    <textarea cols="20" id="referenceDetails" name="ReferenceDetails" rows="2"></textarea>
                </div>
            </div>
            <div class="suggestion-form-wrapper">
                <h3 class="inline">Your details</h3>
                <div class="form-field-group">
                    <p>
                        If you provide your details, we will contact you within 10 working days if we cannot act on your
                        suggestion
                    </p>
                    <div class="small-spacer-below">
                        <label for="userName" id="username-label">
                            Name
                        </label>
                        <input id="userName" name="UserName" type="text" value="">
                    </div>
                    <div class="small-spacer-below">
                        <label for="userEmail" id="email-address-label">
                            Email address
                        </label>
                        <span class="field-validation-valid" data-valmsg-for="UserEmail"
                              data-valmsg-replace="true"></span>
                        <input data-val="true" data-val-email="Email not valid" id="userEmail" name="UserEmail"
                               type="text"
                               value=""></div>
                </div>
                <div class="last-form-field-group">
                    <input class="discoverySecondaryCallToActionLink" type="submit" value="Submit">
                </div>
            </div>
            <input id="Hash" name="Hash" type="hidden" value=""><input id="DocReference" name="DocReference"
                                                                       type="hidden"
                                                                       value="HW 25/37"><input id="ID" name="ID"
                                                                                               type="hidden"
                                                                                               value="C11510465"></form>
    </div>
    <p id="show-suggestion-form">If you find an error with this record description <a href="#">let us know</a></p>
</div>
