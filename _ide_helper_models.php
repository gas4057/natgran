<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ModifierCutting
 *
 * @property int $id
 * @property int $product_id
 * @property int $modifier_type_id
 * @property string|null $thickness
 * @property int $coefficient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereCoefficient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereModifierTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierCutting whereThickness($value)
 * @mixin \Eloquent
 */
	class ModifierCutting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $product_id
 * @property int $engraving
 * @property int $color_id
 * @property int $parterre_id
 * @property int $pedestal_id
 * @property int $tombstone_id
 * @property int $stella_id
 * @property int $epitaph_id
 * @property string $contact_name
 * @property string $contact_phone
 * @property string $contact_email
 * @property string|null $contact_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereEngraving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereEpitaphId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereParterreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePedestalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereStellaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereTombstoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fonts
 *
 * @property int $id
 * @property string $font-family
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Fonts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Fonts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Fonts query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Fonts whereFontFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Fonts whereId($value)
 * @mixin \Eloquent
 * @property string $font_family
 */
	class Fonts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderProduct
 *
 * @property int $id
 * @property int $client_id
 * @property int $product_id
 * @property int $count_product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct whereCountProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct whereProductId($value)
 * @mixin \Eloquent
 */
	class OrderProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CoefficientModifier
 *
 * @property int $id
 * @property int $type_id
 * @property int $material_id
 * @property string|null $thickness
 * @property int $coefficient
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereCoefficient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoefficientModifier whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CoefficientModifier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClientOrder
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int|null $delivery_id
 * @property int $is_paid
 * @property int $is_completed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $delivery
 * @property-read int|null $delivery_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereDeliveryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClientOrder whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ClientOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $name
 * @property string $position
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee wherePosition($value)
 * @mixin \Eloquent
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Modifier
 *
 * @property int $id
 * @property string $height
 * @property string $width
 * @property string $thickness
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereWidth($value)
 * @mixin \Eloquent
 * @property int $products_id
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereProductsId($value)
 * @property int $modifier_id
 * @property int $type_product_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierProduct whereModifierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierProduct whereTypeProductId($value)
 */
	class ModifierProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SiteContact
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $skype
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteContact whereSkype($value)
 * @mixin \Eloquent
 */
	class SiteContact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductMaterials
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductMaterials whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 */
	class ProductMaterials extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TextPosition
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TextPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TextPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TextPosition query()
 * @mixin \Eloquent
 */
	class TextPosition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductType
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read int|null $info_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property string $more_product
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductSubtype[] $productSubtype
 * @property-read int|null $subtype_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductType whereMoreProduct($value)
 */
	class ProductType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\News
 *
 * @property int $id
 * @property string $title
 * @property string $short_desc
 * @property string $description
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CoffinExampleImageType
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImageType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImageType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImageType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImageType whereName($value)
 * @mixin \Eloquent
 */
	class CoffinExampleImageType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\InfoAboutProduct
 *
 * @property int $id
 * @property int $type_id
 * @property string $about
 * @property string $details
 * @property string $price
 * @property string $advantage
 * @property string $characteristics
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereAdvantage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereCharacteristics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InfoAboutProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\ProductType $type
 */
	class InfoAboutProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserQuestions
 *
 * @property int $id
 * @property string|null $nickname
 * @property string $first_name
 * @property string $last_name
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $contact_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereContactMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserQuestions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class UserQuestions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EpitaphTextExamples
 *
 * @property int $id
 * @property int $type_id
 * @property string $text
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextExamples whereTypeId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\EpitaphTextType $type
 */
	class EpitaphTextExamples extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DatePosition
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DatePosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DatePosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DatePosition query()
 * @mixin \Eloquent
 */
	class DatePosition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CoffinExampleImage
 *
 * @property int $id
 * @property string $image
 * @property float $price
 * @property int $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CoffinExampleImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CoffinExampleImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SiteServices
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteServices whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class SiteServices extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TombstoneDateStyle
 *
 * @property int $id
 * @property string $date_of_birth
 * @property string $date_of_die
 * @property int $fonts_id
 * @property int $bold
 * @property int $italics
 * @property int $position_id
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle whereBold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle whereDateOfDie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle whereFontsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle whereItalics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneDateStyle wherePrice($value)
 * @mixin \Eloquent
 */
	class TombstoneDateStyle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EpitaphTextPosition
 *
 * @property int $id
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextPosition query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextPosition whereImage($value)
 * @mixin \Eloquent
 */
	class EpitaphTextPosition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TombstoneTextStyle
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property int $fonts_id
 * @property int $position_id
 * @property int $bold
 * @property int $italics
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle whereBold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle whereFontsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle whereItalics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TombstoneTextStyle wherePositionId($value)
 * @mixin \Eloquent
 */
	class TombstoneTextStyle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Modifier
 *
 * @property int $id
 * @property string $height
 * @property string $width
 * @property string $thickness
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereThickness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereWidth($value)
 * @mixin \Eloquent
 * @property int $products_id
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereProductsId($value)
 * @property int $type_id
 * @property string|null $thickness_size
 * @property-read \App\Models\ModifierType $typeName
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereThicknessSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Modifier whereTypeId($value)
 */
	class Modifier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ModifierType
 *
 * @property int $id
 * @property \App\Models\ModifierType $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModifierType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ModifierType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EpitaphTextType
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EpitaphTextType whereName($value)
 * @mixin \Eloquent
 */
	class EpitaphTextType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Products
 *
 * @property int $id
 * @property int $type_id
 * @property int $material_id
 * @property float $actual_price
 * @property float $old_price
 * @property string $name
 * @property string $info
 * @property string $image
 * @property string $description
 * @property string $specifications
 * @property string $product_code
 * @property string $size
 * @property string $weight
 * @property string $warranty
 * @property string $storage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereActualPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereOldPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSpecifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereWarranty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereWeight($value)
 * @mixin \Eloquent
 * @property-read \App\Models\ProductMaterials $materials
 * @property-read \App\Models\ProductType $type
 * @property int $subtype_id
 * @property int $is_promotional
 * @property int $is_active
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ModifierCutting[] $cutting
 * @property-read int|null $cutting_count
 * @property-read \App\Models\ProductMaterials $material
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Modifier[] $modifiers
 * @property-read int|null $modifiers_count
 * @property-read \App\Models\ProductSubtype $productSubtype
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereIsPromotional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSubtypeId($value)
 */
	class Products extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subtype
 *
 * @property int $id
 * @property int $type_id
 * @property string $subtype_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\ProductType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereSubtypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductSubtype whereTypeId($value)
 * @mixin \Eloquent
 */
	class ProductSubtype extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderEpitaphText
 *
 * @property int $id
 * @property string $text
 * @property int $fonts_id
 * @property int $position_id
 * @property int $bold
 * @property int $italics
 * @property int $is_copyright_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereBold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereFontsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereIsCopyrightText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereItalics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderEpitaphText whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class OrderEpitaphText extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Delivery
 *
 * @property int $id
 * @property string $city
 * @property string $address
 * @property float $price
 * @property int $is_warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery whereIsWarehouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Delivery wherePrice($value)
 * @mixin \Eloquent
 */
	class Delivery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SpecialOffer
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $desc
 * @property string|null $image
 * @property string $date_start
 * @property string $date_end
 * @property int $is_active
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SpecialOffer whereProductId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Product $product
 */
	class SpecialOffer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Articles
 *
 * @property int $id
 * @property string $key
 * @property string $title
 * @property string $content
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Articles extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CurrencyRate
 *
 * @property int $id
 * @property float $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CurrencyRate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CurrencyRate extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

