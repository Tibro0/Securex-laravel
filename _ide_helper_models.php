<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $right_main_image
 * @property string|null $left_title
 * @property string|null $left_description
 * @property string|null $left_icon_first_image
 * @property string|null $left_icon_first_number
 * @property string|null $left_icon_first_title
 * @property string|null $left_icon_second_image
 * @property string|null $left_icon_second_number
 * @property string|null $left_icon_second_title
 * @property string|null $left_button_title
 * @property string|null $left_button_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftButtonTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftButtonUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftIconFirstImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftIconFirstNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftIconFirstTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftIconSecondImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftIconSecondNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftIconSecondTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereLeftTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereRightMainImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereUpdatedAt($value)
 */
	class AboutUs extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllDescription whereValue($value)
 */
	class AllDescription extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $service_name
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName whereServiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AllServiceName whereUpdatedAt($value)
 */
	class AllServiceName extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Detail whereUpdatedAt($value)
 */
	class Detail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $your_name
 * @property string $your_email
 * @property string $your_mobile
 * @property int $all_service_name_id
 * @property string|null $special_note
 * @property string $seen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AllServiceName $allServiceName
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereAllServiceNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereSpecialNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereYourEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereYourMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FreeQuoteForm whereYourName($value)
 */
	class FreeQuoteForm extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $category_id
 * @property string $thumb_image
 * @property string $title
 * @property string $description
 * @property string $url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereThumbImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurProject whereUrl($value)
 */
	class OurProject extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string $button_url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereButtonUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OurService whereUpdatedAt($value)
 */
	class OurService extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string $first_button_name
 * @property string $first_button_url
 * @property string $second_button_name
 * @property string $second_button_url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereFirstButtonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereFirstButtonUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereSecondButtonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereSecondButtonUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocialLink query()
 */
	class SocialLink extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $designation
 * @property string $facebook_url
 * @property string $linkedin_url
 * @property string $whatsapp_url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereFacebookUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereLinkedinUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereWhatsappUrl($value)
 */
	class TeamMember extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $client_name
 * @property string $profession
 * @property string $description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereClientName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereUpdatedAt($value)
 */
	class Testimonial extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $avatar
 * @property string $name
 * @property string $email
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WhyChooseUsIconBox whereUpdatedAt($value)
 */
	class WhyChooseUsIconBox extends \Eloquent {}
}

