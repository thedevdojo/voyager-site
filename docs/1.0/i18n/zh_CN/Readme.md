Voyager文档
=======

Voyager `1.0`文档

<a href="https://packagist.org/packages/tcg/voyager"><img src="https://poser.pugx.org/tcg/voyager/v/stable.svg?format=flat" alt="Latest Stable Version"></a>

## 欢迎使用Voyager

欢迎来到Voyager 1.0文档。这篇文档将教会您如何安装，配置和使用Voyager 。

# 开始

## Voyager是什么

在安装Voyager之前，您可能需要花一些时间去了解**Voyager是什么？** **Voyager不是什么？**

**Voyager可以是**

- 您的laravel应用的一个管理界面 An admin interface for your Laravel ap
- 为应用程序添加/编辑/删除数据的一种简单方法 An easy way to add/edit/delete data for your app
- 一个菜单生成器A menu builder (build menus in Voyager for your app)
- 一个媒体管理工具（包括图片，文件等资源） A media manager for your files
-  CRUD/BREAD 权限控制器 [查看更多关于BREADDE信息](#core-concepts-bread)

Voyager仅仅是您的laravel应用中的一个后台，使怎样使用您的前台和Voyager无关,您对您的程序仍然保持完整的控制权限。Voyager可以让您轻松随意的添加数据，编辑用户，创建菜单和许多其他管理任务。

**Voyager不是**什么

- CMS(内容管理系统)
- 博客平台
- Wordpress (Bleh 😜)

Voyager不是CMS或者博客平台。当然您可以使用它来构建一个CMS或者博客平台，但是Voyager本身并不是那些。如前一节所述，您完全控制了您的应用程序将做什么以及它将如何运行。

通过使用Laravel & Voyager，您可以创建您心目中想象的任何种类的应用。Laravel & Voyager就是这样一个可以把您的想象化为现实的强大工具。

## 安装

Voyager的安装非常简单。当您创建完您的laravel应用之后，您可以使用composer把Voyager扩展包包含到您的应用中

```bash
composer require tcg/voyager
```

接下来在.env文件中，确认您的数据库权限

接下来，确保创建一个新数据库，并将您的数据库凭据添加到`.env`文件中

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

当然您也要需要 更新.env文件中的 `APP_URL` 来更新您的网站URL

```
APP_URL=localhost:8000
```

接下来在`config/app.php`文件中`providers`数组中添加Voyager服务提供者

```php
'providers' => [
    // Laravel Framework Service Providers...
    //...
    
    // Package Service Providers
    TCG\Voyager\VoyagerServiceProvider::class,
    // ...
    
    // Application Service Providers
    // ...
],
```

最后就是安装Voyager了。您可以通过参数来控制是否需要安装测试数据。测试数据包括一个管理员账号(注:用户表没有数据的时候)，一个演示页，一个演示文章，两个分类，以及7个设置。

不带测试数据安装

```bash
php artisan voyager:install
```

如果想要安装测试数据的话，带上--with-dummy即可

```bash
php artisan voyager:install --with-dummy
```

> 可能遇到的问题: **Specified key was too long error**. 如果您的MySQL版本比较旧的话，您可能会遇到这样的错误, 请使用这个解决方案: https://laravel-news.com/laravel-5-4-key-too-long-error

这样初始工作就全部搞定了

通过命令 `php artisan serve` 来启动本地开发服务器环境，然后访问 [http://localhost:8000/admin](http://localhost:8000/admin).

如果您安装的时候带上了测试数据，那么可以使用下面的账号和密码进行登录:

>**email:** `admin@admin.com`   
>**password:** `password`

注: 测试用户只会在您的users表中没有数据的时候才会创建

如果您安装的时候没有选择测试数据，那么您可能想要给一个存在的用户赋予管理员权限。您可以使用下面的命令来创建

```bash
php artisan voyager:admin your@email.com
```

如果您想要创建一个新的用户的话，可以使用 `--create` 标签，就像这样

```bash
php artisan voyager:admin your@email.com --create
```

然后系统可能会提示您需要键入名字称和密码

## 升级

在升级之前，您必须要备份好您的应用和数据库。

### Version 1.0

想要更新到最新版本的话，修改 composer.json中的tcg/voyager如下

```
"tcg/voyager": "1.0.*"
```

然后运行命令

```
composer update
```

接下来您可能想要更新所有的发布的资源。您可以通过下面的命令来重新发布您的资源

```
php artisan vendor:publish --tag=voyager_assets --force
```

最后，您可以通过下面的命令来清除视图缓存

```
php artisan view:clear
```

### 从Version 0.11 更新到 version 1.0

更新到最新版本的做法同上，修改 composer.json中的tcg/voyager如下

```
"tcg/voyager": "1.0.*"
```

然后运行命令

```
composer update
```

接下来重新发布资源，通过下面的命令来发布资源

```
php artisan vendor:publish --tag=voyager_assets --force
```

最后清除视图缓存

```
php artisan view:clear
```

需要运行以下迁移，包括添加到最新版本的新表或行。您可以在下面找到以下每个迁移：

    - Link to migration file 1
    - Link to migration file 2
    - ...

做完这些，就升级完毕了

### 从Version 0.10 升级到1.0

 从0.10或更早的版本升级到1.0的话, 请先升级到0.11: [升级到0.11](/docs/0.11/#getting-started-upgrading-version-010-to-011)

然后回到上面的步骤从0.11升级到1.0

## 配置

安装voyager之后，您将会在 `config/voyager.php`找到一个新的配置文件。在这个文件中，您可以找到有关voyager的各种配置选项。接下来对每一个配置选项进行详细介绍

#### 用户配置

```
'user' => [
    'add_default_role_on_register' => true,
    'default_role'                 => 'user',
    'admin_permission'             => 'browse_admin',
    'namespace'                    => App\User::class,
],
```

**add_default_role_on_register**:  创建新用户的时候是否分配默认角色指定是否要将默认角色添加到创建的任何新用户中。

**default_role**: 指定用户的初始角色

**admin_permission**: 查看管理面板的权限 

**namespace**:  User类的命名空间 

#### 控制器配置

```
'controllers' => [
    'namespace' => 'TCG\\Voyager\\Http\\Controllers',
],
```

如果您真的想要重写voyager的核心功能的话，可以通过配置此选项来完成，如果复制Voyager Controllers 到其他地方来创建属于您自己风格的控制器

> 如果您仅仅只是想重写某一个控制器的话，那么您可以在 `AppServiceProvider`的regisetr方法中添加下面一小段代码
> ```
> $this->app->bind(VoyagerBreadController::class, MyBreadController::class);
> ```
#### 资源配置

```
'assets_path' => '/vendor/tcg/voyager/assets',
```
通过这个配置这个选项，您可以定制您的资源目录。如果您的目录是一个子目录，那么必须包含父目录。

> 注:当升级voyager的时候，/vendor/tcg/voyager/assets 目录会被覆盖。所以如果您想要重新发布资源的话，请定义一个其他的路径。
>

####存储配置

~~~
'storage' => [

    'subfolder' => 'public/', // include trailing slash, like 'my_folder/'

],
~~~

voyager会使用`config/filesystems.php`中的存储配置和驱动。如果您想要定制您的存储目录的话，可以在这里进行配置

# 核心概念

## 路由

当安装好voyager之后，您可能会注意到，在`routes/web.php`文件中增加了一些路由如下

~~~
Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

});
~~~

这是voyager的路由。您可以任意修改它的前缀`admin`.或者放置一些其他您需要的配置，如`middleware`和`domain`

当您创建一个新的BREAD类型和标识的时候，您可以访问下面的路由

~~~
URL/admin/slug-name
~~~

举个例子，如果我们有一个`products数据`表，然后我们想给给`product`数据表加一个标识，您可以访问下面的路由

~~~
URL/admin/products
~~~

> 注 在admin的后台中是看不到这个链接的。不过您可以在菜单生成器中创建一个这样的链接
>

## 菜单

通过使用Voyager菜单生成器，您可以非常轻松的给您的应用创建菜单。实际上Voyager后台的左侧菜单就是通过菜单生成器创建的

您可以用过点击*tools->Menu Builder*按钮来查看您当前的菜单。在这里您可以添加，修改，或者是删除当前的菜单。那就意味着您可以任意创建您想要的菜单，包裹您的网站头部，侧边栏或者是页脚。

如果您想要添加菜单项的话，可以通过点击`builder`按钮来创建

![Voyager Menus](/docs/0.10/images/menu-01.jpg)

在这里您可以添加，修改和删除菜单项

![Voyager Menus](/docs/0.10/images/menu-02.jpg)

创建并且配置好您的菜单之后，您可以轻松的应用它。如果我们有一个菜单的叫做main

,那么您可以用下面的代码在任意`view`中输出您的菜单

~~~
Menu::display('main');
~~~

这个代码会输出一个没有任何样式的菜单。如果您想使用`bootstrap`风格的菜单的话，可以传第二个参数来使它变成`bootstrap`风格的菜单,就像这样:

~~~
Menu::display('main', 'bootstrap');
~~~

如果您想更进一步定制您的菜单的话，您可以添加一个视图文件`resources/views/my_menu.blade.php`包含下面这样的代码

~~~php+HTML
<ul>
    @foreach(items as menu_item)
         <li><a href="{{ $menu_item->url }}">{{ $menu_item->title }}</li>
    @endforeach
</ul>
~~~

然后在任何位置通过下面的代码来调用您的菜单

~~~
Menu::display('main', 'my_menu');
~~~

这样就能输出您想要的菜单了

## 权限

Voyager自带了角色和权限控制。每个用户都可以拥有一个角色，而每个角色可以拥有一系列的权限。

您可以通过下面的代码来检测用户是否拥有某个权限:

~~~
canVisitAdmin = user->hasPermission('browse_admin');

$canVisitAdmin = auth()->user()->hasPermission('browse_admin');
~~~

`hasPermission`方法会在用户是否拥有某个权限的时候，返回相应的布尔值.然而当一个用户没有权限的时候，您可能需要抛出一个没有权限的异常。您可以使用`Voyager`门面

~~~
Voyager::can('browse_admin');
~~~

 这个代码如果不返回true的话，就会抛出一个异常

>请注意在`v0.11`版本中使用的话，`Voyager::can`只会返回true和false， 需要跑出异常请使用`Voyager::canOrFail`



下面是Voyager自带的一些权限:

- `browse_admin`: 用户是否可以浏览Voyager管理面板
- `browse_database`: 用户是否可以浏览Voyager数据库的菜单部分。
- `browse_media`: 用户是否可以Voyager媒体部分。
- `browse_settings`:用户是否可以浏览Voyager设置部分。
- `browse_menu`: 用户是否可以Voyager菜单部分

当您创建任何数据表的时候，您都可以定义`Generate permissions`。通过定义这个，可以创建数据表对应的BREAD`browse`, `read`, `edit`, `add`  `delete` 权限。比如 `menus`BREAD，对应的权限标识就是 `browse_menus`, `read_menus`, `edit_menus`, `add_menus` 和`delete_menus`。

> 注:当使用菜单项的时候，它对应的是`browse`权限，比如菜单项的 BREAD，它会检测`browse_menus`权限.如果用户没有这个权限的话，那么用户将看不到这个菜单.



## 数据库工具

Voyager有非常棒的数据库管理工具。通过这个工具您可以增加/创建/删除/查看您当前的数据表.另外您还可以用过这个工具给数据表添加BREAD (Browse, Read, Edit, Add, & Delete)控制和一些其他的功能.

在后台控制面板中，您可以通过访问` Tools->Database `查看您当前数据库中所有的数据表.然后您可以通过点击 'Create a New Table'来创建一个新的数据表.

如果您点击数据表名的话，您可以看到当前数据表的设计.另外您也可以点击View, Edit, 或者Delete 来实现对数据表的操作。

如果点击Add BREAD的话，可以创建数据表的BREAD权限。如果一个数据表已经有BREAD的话，您可以编辑或者删除它们.

## BREAD权限

当为数据库表添加或编辑当前BREAD时，您可以在视图中选择您希望看到的每一个字段：

* kBROWSE (浏览当前数据时会显示字段)
* READ (单击查看数据时显示字段)
* EDIT (编辑数据的时候显示字段)
* ADD (当您选择创建新数据类型时，字段将可见。)
* DELETE (字段是否可以被删除)

你可以给每个字段指定类型，如文本框，文本框，复选框，图像或者其他类型的表单元素。

当然每个字段也还包括一些附加的选项，比如复选框、下拉框、单选按钮和图像。接下来将详细介绍：

### 附加字段选项

当编辑您的Browse, Read, Edit, Add, 和 Delete行的时候，会有一个选择框让来选择各种附加属性和选项。它的格式是JSON，它适用于以下类型的输入：

- Text (文本输入框，文本域，富文本，隐藏域)
- Check Box
- Drop Down
- Radio Button
- Image
- Date

了解如何在下面使用这些附加详细信息：

#### Text (文本框，文本域，富文本框，隐藏域)

```js
{
    "default" : "Default text"
}
```

Text Box, Text Area, Rich Textbox and Hidden are all kind of texts inputs. In the JSON above you can specify the `default` value of the input.

在文本框、文本区、富文本框和隐藏域等各种文本输入中，可以通过配置上面的JSON中的`default`，来指定输入的默认值。

#### Check Box 复选框
```js
{
    "on" : "On Text",
    "off" : "Off Text",
    "checked" : "true"
}
```

在Voyager中，一个复选框会被转换成一个切换开关，正如您所见，当切换开关设置为on时，键上的值将包含这个值，而OFF将包含开关关闭时设置的值。如果选中设置为true，复选框将切换，否则默认情况下将关闭。

#### Drop Down 下拉列表
```js
{
    "default" : "option1",
    "options" : {
        "option1": "Option 1 Text",
        "option2": "Option 2 Text"
    }[]
}
```

当指定输入类型是一个下拉列表时，需要指定下拉列表的值。在上面的JSON中，可以通过设置`default`来设置默认值。在`options`中，左边对应的是option中的value，右边是需要显示的文本


#### Radio Button 单选按钮
```js
{
    "default" : "radio1",
    "options" : {
        "radio1": "Radio Button 1 Text",
        "radio2": "Radio Button 2 Text"
    }
}
```

单选按钮的设置和下拉菜单是完全一样的。包括默认值，选项值和显示文本

####Image 图像

```js
{
    "resize": {
        "width": "1000",
        "height": "null"
    },
    "quality" : "70%",
    "upsize" : true,
    "thumbnails": [
        {
            "name": "medium",
            "scale": "50%"
        },
        {
            "name": "small",
            "scale": "25%"
        },
        {
            "name": "cropped",
            "crop": {
                "width": "300",
                "height": "250"
            }
        }
    ]
}
```

图像输入有许多选项。默认情况下，如果没有指定任何选项，那也是没有问题的…您的图像仍然会被上传。但是，如果要调整图像的大小，设置图像的质量，或者为上传的图像指定缩略图，则需要指定这些细节。

**resize**

如果要指定大小，则需要将其包含在调整大小的对象中。如果将高度或宽度设置为null，它将根据所设置的宽度或高度保持长宽比。因此，对于上面的例子，宽度被设置为`1000`个像素，并且由于高度被设置为null，它将调整图像宽度到1000个像素并根据当前的宽高比调整大小。

**quality**

如果您希望以百分比质量压缩图像，可以在`quality`键中指定该百分比。通常在70到100%之间，基本不会影响到图像质量，但是图像大小可能会显著降低。

**upsize**

这是影响图像大小的唯一属性。如果您指定您的图像大小为1000像素，但是图像是小于1000像素，在默认情况下它不会升级到1000像素；但是如果您设置`upsize为true`的话，图像就会上升到1000像素。

**thumbnails**

缩略图是一系列的对象。每个对象都会在创建缩略图的时候创建，并且每个对象都会包含2个值，`name`和`scale`百分比。`name`将被附加到您的缩略图（比如说您上传的图像是abc.jpg的话，创建medium的缩略图的时候与就是ABC-media.jpg）。`scale`是您想要缩略图缩放的百分比。如果指定这个值的话，它将会是对应缩放的比例。

#### Date 日期

```js
{
    "format" : "Y-m-d"
}
```

日期输入字段是您可以输入日期的地方。在上面的JSON中，可以指定日期输出的格式值 。它会用 `Carbon`工具的`formatLocalized()` 方法 ，让你在browse和read试图中显示格式化的日期。

### Description 描述

所有类型都可以包含一个描述信息，这个描述信息可以让你明白这个BREAD输入字段的作用，它的定义在`Optional Details`JSON域中

```js
{
    "description": "A helpful description text here for your future self."
}
```

### Validation 验证

在BREAD的*Optional Details*中的中，还可以用一些简单的JSON指定验证规则。下面是一个如何添加验证规则或需要的最大长度为12的示例

```js
{
    "validation": {
        "rule": "required|max:12"
    }
}
```

此外，您可能希望添加一些自定义错误消息，这些消息可以像这样完成：

```
{
    "validation": {
        "rule": "required|max:12",
        "messages": {
            "required": "This :attribute field is a must.",
            "max": "This :attribute field maximum :max."
        }
    }
}
```

自 `v0.10.13` 起，您可以通过这样的方法来使用验证规则`required`  `max:12` 

```
{
    "validation": {
        "rules": [
            "required",
            "max:12"
        ]
    }
}
```

### 生成标识

您可能希望使用BREAD生成器自动生成一个输入。比如说您有一些帖子，其中有标题和标识。如果要从title属性自动生成slug，需要包含下面的可选详细选项`Optional Details`

```js
{
    "slugify": {
        "origin": "title", 
        "forceUpdate": true
    }
}
```

这将自动从title字段的输入中生成标识。如果标识已经存在，可以使用forceupdate强制更新，不过这个默认是禁用的。

### Relationships 关系

使用BREAD生成器附加选项，您可以对`rows`添加关系。有两个输入类型可以让您指定其中一张数据表和另外一张数据表之间的关系

- Dropdown
- Multiple Select

#### Dropdown 下拉菜单

下来菜单对应的是数据表之间一对多的关系。例如，我们在一个`pages`表有一个author_id字段，这个字段对应的是`users`表中的`id`字段

那么值需要在`pages`的BREAD中选择一个*Select Dropdown*作为输入类型，作为author_id的输入类型，然后在可选详细选项` Optional Details`中输入这样一段JSON：

```js
{
    "relationship": {
        "key": "id",
        "label": "name"
    }
}
```

key表示在下拉列表中的值，而label则是下拉列表中需要显示的数据

最后，我们需要在`pages`表的`model`中创建一个方法来映射他们的关系。看起来应该是下面这个样子

```php
public function authorId(){
    return $this->belongsTo(User::class);
}
```

> 注：用这种方法，必须保证`pages`表的对应行的驼峰法(CamelCase)匹配。因为字段是author_id，所以我们的方法就是authorId.

您也可以选择通过增加一个新的`page_slug`来描述它们的对应关系

```js
{
    "relationship": {
        "key": "id",
        "label": "name",
        "page_slug": "admin/users"
    }
}
```

> If no page_slug is provided, then the real "text" (`relationship.label`) is still being "resolved", but no anchor link is created.

这就是我们如何执行一对一关系的方法。接下来，您将看到如何创建多对多关系。

#### Multiple Select 多选框

使用多选框我们可以创建一个`belongstomany`关系。这个会通过一个中间表来创建两个表之间的多对多的关系

比如我们现在有一个`categories`表，一个`pages`表，和一个中间表`category_page`:

然后在`pages`的BREAD中，我们在`categories`的任意一行中选择`Multiple Select`作为该行的输入类型（该行原本可以是任何类型），然后在`*Optional Details* `配置如下

```
{
    "relationship": {
        "key": "id",
        "label": "name"
    }
}
```

Now, we'll need to create the relationship inside of the `Page` class like so:

现在，我们需要在`pages`类中创建这样的关系：

```php
public function categories(){
    return $this->belongsToMany(Category::class);
}
```

> 注：如果您使用的不是常用的中间表名称，可以通过下面的配置来指定中间表

```php
public function categories(){
    return $this->belongsToMany(Category::class, 'page_categories');
}
```

现在，当您保存之后，多对多关系的每一个值的ID将同步并添加到您的中间表中。

> 请注意，这也可以配置为一个普通的`Select Dropdown`，需要注意的是要把`options`替换成`relationship`才能体现对应的关系

您可以添加一个新的page_slug属性的关系，在VREAD的`options details来显示它们的关系。就像这样:

```
{
    "relationship": {
        "key": "id",
        "label": "name",
        "page_slug": "admin/users"
    }
}
```

### NULL values 空值

有时候你可能需要保存`null`值，而不是一个空字符串

那么在`BREAD`中您可以给字段添加的*Optional Details*：

```
{
    "null": ""
}
```

这将将空字符串变为`null`值。不过有些时候你只想给某些特定的字段转换成`null` ，而不是所有的空字符串都转换成`null`，比如需要把`Nothing`转成成`null`，那么在Optional Details这样配置：

```
{
    "null": "Nothing"
}
```

这样输入为`Nothing`到该字段的时候，就会变成`null`。

### Display Options显示选项

也有一些选项可以包括改变BREAD显示的方式。您可以向您的JSON对象添加一个`display`键，并更改特定字段的宽度，甚至指定一个自定义ID。

```
{
    display: {
        width: '3',
        id: 'custom_id'
    }
}
```

在12个网格系统上，设置的宽度为3也就是宽度的25%。

id将让您自动加上id属性。如:

```html
<div id="custom_id">
    <!-- Your field element -->
</div>
```

# Customization 定制

## Overriding Views 重写视图
您可以在``resources/views/vendor/voyager/slug-name` 目录下创建一个新的目录来重写一个BREAD视图,然后新的视图名称会被应用到相应的数据表.有两个一定会包含的文件如下

 - browse.blade.php
 - edit-add.blade.php

默认情况下，两个`posts`视图会发布到您的`resources/views/vendor/voyager`目录中。所以这两个视图文件应该在`resources/views/vendor/voyager/posts/browse.blade.php`和`resources/views/vendor/voyager/posts/edit-add.blade.php`.

## Using Custom HTTP Controllers 个性化HTTP控制器
您可以通过扩展`Voyager`控制器来使用您自己的控制器。在`config/voyager.php`中定义控制器的命名空间：

```
/*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'App\\Http\\Controllers\\Voyager',
    ],
```

通过运行artisan工匠命令`php artisan voyager:controllers`,voyager就会使用 `App/Http/Controllers/Voyager`下的控制器

## Overriding Routes 重写路由
您可以在`Voyager::routes()`下方写任意路由来重写Voyager的路由。比如您想重写LoginController的post路由

```
Route::group(['prefix' => 'admin'], function () {
   Voyager::routes();

   // Your overwrites here
   Route::post('login', ['uses' => 'MyAuthController@postLogin', 'as' => 'postlogin']);
});
```

## Additional CSS And JS (Theming)额外的CSS和JS（主题）
在最新版本中，您现在可以向voyager master blade添加额外的CSS和js文件，而不必复制或修改blade文件，这样可以降低未来迁移的难度.

所有的CSS和js文件是在任何Voyager资源加载之后之后加载的，所以你可以轻松的覆盖任何功能。

当然，这是配置都是通过voyager.php来进行的，如果您的boyager版本不熟`0.11.10 +`您将需要手动添加到您的配置。

```php
    // Here you can specify additional assets you would like to be included in the master.blade
    'additional_css' => [
        //'css/custom.css',
    ],

    'additional_js' => [
        //'js/custom.js',
    ],
```

您可以通过查看`/vendor/tcg/voyager/publishable/config/voyager.php`来检查你当前配置是否有缺失.

# Troubleshooting故障排除

## Working with Coordinates 协同工作

通过点击下面的链接可以和我们一起来解决问题: [https://github.com/the-control-group/voyager/pull/1433](https://github.com/the-control-group/voyager/pull/1433)

## Using HTTPS on your site 使用HTTPS

**故障:**

使用HTTPS访问的时候，图片无法显示

**原因:**

Voyager使用的图片url如下

```
Storage::disk(config('voyager.storage.disk'))->url($file);
```

如果` voyager.storage.disk` 是public，而且在laravel是默认配置的话，url属性就是这样

```
'url' => env('APP_URL').'/storage',
```

这样创建的的图片路径就是不带https

**解决方案:**

如果您从 public disk 配置中移除env（'app_url”），它就可以渲染一个和域名对应的url，这个url会保持和你当前域名相同的url

顺便说一句，如果您需要一个完整的URL，您可以调用 `asset()`来部署``Voyager::image('...')`就像这样

```
asset(Voyager::image('...'))
```

这样就会是完整的的图片路径了，包括域名和协议。