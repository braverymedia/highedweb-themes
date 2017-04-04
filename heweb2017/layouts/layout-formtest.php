<?php
/**
 * Template Name: Form Test
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

<div class="row">
    <div class="large-12 columns">
        <h1>Propose a presentation</h1>
        <p class="intro">We are looking for a wide variety of presentations related to Web, communications, marketing, programming, professional skills and higher education.</p>
    </div>
</div>
<div class="row">
    <div class="large-8 columns">
<form action="/proposals" data-abide="" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="eBvb1nyhfIR-x6t7fMh47Nv1Q9Sobaiq2-H-iTbqBov1PzEyov0IRoHVN5f90xqyF5R6HthekYz1vE8SCrmKCZ90MnQ1">            <p>To submit your proposal, please complete the following. All fields are required unless noted.</p>
            <fieldset>
                <legend>Proposed session information</legend>
                <h4>What format below fits your proposed presentation?</h4>
                <dl>
                    <dt></dt>
                    <dd class="checkbox-group" data-abide-validator-limit="1,100">
                        <ul class="element-list-v">
                                <li>
                                    <input type="checkbox" name="FormatList" id="PresentationFormat20" value="45-minute Track Presentation" data-abide-validator="checkbox_limit">
                                    <label for="PresentationFormat20">
                                        45-minute Track Presentation
                                            <span class="SessionDeadlines">(deadline: 3/27/2017)</span>
                                                                            </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="FormatList" id="PresentationFormat21" value="Poster Presentation" data-abide-validator="checkbox_limit">
                                    <label for="PresentationFormat21">
                                        Poster Presentation
                                            <span class="SessionDeadlines">(deadline: 3/27/2017)</span>
                                                                            </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="FormatList" id="PresentationFormat22" value="3.5-Hour Workshop" data-abide-validator="checkbox_limit">
                                    <label for="PresentationFormat22">
                                        3.5-Hour Workshop
                                            <span class="SessionDeadlines">(deadline: 3/27/2017)</span>
                                                                            </label>
                                </li>
                        </ul>
                </dd></dl>
                <h4>Please describe the session.</h4>
                <p>(No HTML code allowed.)</p>
                <dl>
                    <dt><label for="Title">Title:</label></dt>
                    <dd>
                        <input data-abide-validator="no_html has_length" data-val="true" data-val-length="Title must be 100 characters or less" data-val-length-max="100" data-val-required="Title is required" id="Title" name="Title" required="True" type="text" value="">
                        <small class="error">Title is required.  HTML (&lt; and &gt; for instance) is not allowed.</small>
                    </dd>
                </dl>
                <dl>
                    <dt><label for="Abstract">Abstract:</label>
                        <p>This is the description of your session as it would appear in our printed and online program. Please include learning outcomes for attendees - this helps them convince their leaders that we're worth the cost of admission. If your proposal is accepted, we will work with you to edit this text for consistency and marketing purposes.</p>
                    </dt>
                    <dd>
                        <small class="error">Abstract is required. HTML (&lt; and &gt; for instance) is not allowed.</small>
                        <textarea cols="20" data-abide-validator="no_html has_length" data-val="true" data-val-length="Abstract must be 2500 characters or less" data-val-length-max="2500" data-val-required="Abstract is required" id="Abstract" name="Abstract" required="True" rows="2"></textarea>
                    </dd>
                </dl>

                <dl>
                    <dt><label for="Pitch">Elevator pitch:</label>
                        <p>Use this area to pitch why your proposal is relevant to conference attendees. This is to help the HighEdWeb Committee better understand your proposal, and will not be shown to attendees. </p>
                    </dt>
                    <dd>
                        <small class="error">Pitch is required. HTML (&lt; and &gt; for instance) is not allowed.</small>
                        <textarea cols="20" data-abide-validator="no_html has_length" data-val="true" data-val-length="Elevator pitch must be 2500 characters or less" data-val-length-max="2500" data-val-required="Elevator pitch is required" id="Pitch" name="Pitch" required="True" rows="2"></textarea>
                    </dd>
                </dl>



                <h4>How technical is your presentation?</h4>
                <dl>
                    <dt></dt>
                    <dd>
                        <ul class="element-list-v">
                                <li>
                                    <input type="radio" name="TechDifficulty" required="" id="TechDifficulty1" value="1">
                                    <label for="TechDifficulty1">1 - Not Technical</label>
                                </li>
                                <li>
                                    <input type="radio" name="TechDifficulty" required="" id="TechDifficulty2" value="2">
                                    <label for="TechDifficulty2">2</label>
                                </li>
                                <li>
                                    <input type="radio" name="TechDifficulty" required="" id="TechDifficulty3" value="3">
                                    <label for="TechDifficulty3">3 - Moderately Technical</label>
                                </li>
                                <li>
                                    <input type="radio" name="TechDifficulty" required="" id="TechDifficulty4" value="4">
                                    <label for="TechDifficulty4">4</label>
                                </li>
                                <li>
                                    <input type="radio" name="TechDifficulty" required="" id="TechDifficulty5" value="5">
                                    <label for="TechDifficulty5">5 - Highly Technical</label>
                                </li>
                        </ul>
                    </dd>
                </dl>
                <h4>In what kind of track(s) would your presentation fit?</h4>
                <dl>
                    <dt></dt>
                    <dd class="checkbox-group" data-abide-validator-limit="1,100">
                        <ul class="element-list-v col-list">
                                <li>
                                    <input type="checkbox" id="Track77" name="ProposalTrackList" value="Applications" data-abide-validator="checkbox_limit">
                                    <label for="Track77">Applications</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track78" name="ProposalTrackList" value="Content" data-abide-validator="checkbox_limit">
                                    <label for="Track78">Content</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track79" name="ProposalTrackList" value="Design" data-abide-validator="checkbox_limit">
                                    <label for="Track79">Design</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track80" name="ProposalTrackList" value="Hardware" data-abide-validator="checkbox_limit">
                                    <label for="Track80">Hardware</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track81" name="ProposalTrackList" value="Management" data-abide-validator="checkbox_limit">
                                    <label for="Track81">Management</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track82" name="ProposalTrackList" value="Marketing/Communications" data-abide-validator="checkbox_limit">
                                    <label for="Track82">Marketing/Communications</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track83" name="ProposalTrackList" value="Professional Development" data-abide-validator="checkbox_limit">
                                    <label for="Track83">Professional Development</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track84" name="ProposalTrackList" value="Programming" data-abide-validator="checkbox_limit">
                                    <label for="Track84">Programming</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track85" name="ProposalTrackList" value="Usability" data-abide-validator="checkbox_limit">
                                    <label for="Track85">Usability</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track86" name="ProposalTrackList" value="Social Media" data-abide-validator="checkbox_limit">
                                    <label for="Track86">Social Media</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track87" name="ProposalTrackList" value="Mobile" data-abide-validator="checkbox_limit">
                                    <label for="Track87">Mobile</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="Track88" name="ProposalTrackList" value="Teaching/Education" data-abide-validator="checkbox_limit">
                                    <label for="Track88">Teaching/Education</label>
                                </li>
                        </ul>
                    </dd>
                </dl>
            </fieldset>
            <input type="submit" value="Save and add presenters">
</form>    </div>
    <div class="large-4 columns">
        <h3>Why Present?</h3>
        <ul>
            <li>Share your experience.</li>
            <li>Network with your peers.</li>
            <li>Add something cool to your CV or résumé.</li>
            <li>Receive a conference registration discount: $400 off for poster or 45-minute track presenters (up to two discounts per presentation), or free early-bird rate conference registration for workshop presenters.</li>
            <li>Be in the running to win a coveted Red Stapler Award for best presentation.</li>
        </ul>
        <h3>Session Examples</h3>
        <p>Check <a target="_blank" href="http://2016reg.highedweb.org/schedule/">last year's conference program</a> for examples.</p>
        <h3>Proposal Timeline</h3>
        <ul>
            <li>You will be notified in May if your proposal is accepted.</li>
            <li>Have questions?  Contact the <a href="mailto:lori.packer@rochester.edu">program committee chair</a>.</li>
        </ul>
    </div>
</div>
                        </main>
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
