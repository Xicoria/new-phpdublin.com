<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MeetupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meetups')->insert([
            'name'          => 'PHP Dublin — August 2015',
            'meetup_url'    => 'http://www.meetup.com/PHP-Dublin/events/224450191/',
            'location'      => "Kitman Labs Ltd, Block B, Joyce's Court, Joyce's Walk, Talbot Street, Dublin",
            'location_url'  => 'http://maps.google.com/maps?f=q&hl=en&q=Block+B%2C+Joyce%E2%80%99s+Court%2C+Joyce%E2%80%99s+Walk%2C+Talbot+Street%2C+Dublin%2C+ie',
            'map_embed_url' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.5323136768216!2d-6.251388699999999!3d53.351627699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e892dead12f%3A0xb0bcd7c780ebda1f!2sJoyce&#39;s+Court%2C+Joyce&#39;s+Walk%2C+Talbot+St%2C+Dublin+1%2C+Ireland!5e0!3m2!1sen!2sus!4v1440425870379",
            'description'   => ",
                    <p><strong>We're back in August for a session of lightning talks!</strong></p>
                    <p>A lightning talk is a quick one - 5-10 minutes on a single concept, idea, feature or product.</p>
                    <p>If you've got something you'd like to talk about, let us know! It can be as short as just 5 minutes so a perfect opportunity to trial some otherwise untested speaking/presenting skills!</p>

                    <h3>New Venue!</h3>
                    <p>Thanks to <a href=\"http://kitmanlabs.com\">Kitman Labs</a> (<a href=\"http://careers.kitmanlabs.com\">they're hiring</a> !) we've got a new city-centre venue on Joyce’s Walk, just off Talbot Street.</p>

                    <h3>I wanna talk!</h3>
                    <p>Great! We'd love to hear from you. If you have a talk you would like to give, please <a href=\"/contact\">send us details</a>. Don't be shy!</p>
                    <p>In fact, if you need a template for your talk, feel free to <a href=\"./templates/PHPDublinSlideTemplate.otp\">use ours</a>!</p>

                    <h3>Doors open 7pm</h3>",
            'starts_on'     => new Carbon('7pm August 25th 2015'),
        ]);
    }
}
