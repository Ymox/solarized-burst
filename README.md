# Ymox Solarized Burst Theme

Ymox variation over Sunburst and Solarized (dark) themes.

Provides integration with Visual Studio and Modern dark IDE colours.

This is mainly for web related languages. Below are a few examples.

## Big picture

In order to display this in markdown on GitHub, here are some examples of main colours generated through [placehold.co](https://placehold.co/). Use this raw file with another markdown renderer to preview languages syntax highlighting.

<div align="center">

![default: `#bbbbbb`](https://placehold.co/84x24/1E1E1E/BBBBBB/svg?text=default&font=Open+Sans "bbbbbb")  
![comments: `#808080`](https://placehold.co/96x24/1E1E1E/808080/svg?text=comments&font=Open+Sans "808080")

![strings (with enclosures): `#aa0000`](https://placehold.co/300x24/1E1E1E/AA0000/svg?text=strings+(with+enclosures)&font=Open+Sans "aa0000")  
![numbers: `#008080`](https://placehold.co/84x24/1E1E1E/008080/svg?text=numbers&font=Open+Sans "008080")  
![keywords: `#99cf50`](https://placehold.co/96x24/1E1E1E/99CF50/svg?text=keywords&font=Open+Sans "99cf50")  
![variables: `#3e87e3`](https://placehold.co/120x24/1E1E1E/3E87E3/svg?text=variables&font=Open+Sans "3e87e3")  
![functions: `#e28964`](https://placehold.co/108x24/1E1E1E/E28964/svg?text=functions&font=Open+Sans "e28964")  
![OOP class: `#b7f8ff`](https://placehold.co/108x24/1E1E1E/B7F8FF/svg?text=OOP+class&font=Open+Sans "b7f8ff")  
![OOP class member, constants/enums/readonly: `#5555ff`](https://placehold.co/504x24/1E1E1E/5555FF/svg?text=OOP+class+member,+constants%2Fenums%2Freadonly&font=Open+Sans "5555ff")  
![OOP class method: `#89bdff`](https://placehold.co/192x24/1E1E1E/89BDFF/svg?text=OOP+class+method&font=Open+Sans "89bdff")

![tags: `#f4e19d`](https://placehold.co/48x24/1E1E1E/F4E19D/svg?text=tags&font=Open+Sans "f4e19d")  
![attributes: `#008000`](https://placehold.co/132x24/1E1E1E/008000/svg?text=attributes&font=Open+Sans "008000")  
![(x)HTML entities: `#c64432`](https://placehold.co/192x24/1E1E1E/C64432/svg?text=(x)HTML+entities&font=Open+Sans "c64432")
</div>

Excepted in Markdown, no font variant are used (italic, bold, etc.).

## Languages

### HTML

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code><span style="color: #f4e19d;">&lt;!</span><span style="color: #a00000;">DOCTYPE html</span><span style="color: #f4e19d;">&gt;</span>
<span style="color: #f4e19d;">&lt;html</span> <span style="color: #008000;">xmlns</span>=<span style="color: #aa0000;">"http://www.w3.org/1999/xhtml"</span> <span style="color: #008000;">lang</span>=<span style="color: #aa0000;">"en"</span> <span style="color: #008000;">xml:lang</span>=<span style="color: #aa0000;">"en"</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;head&gt;</span>
		<span style="color: #f4e19d;">&lt;meta</span> <span style="color: #008000;">charset</span>=<span style="color: #aa0000;">"utf-8"</span><span style="color: #f4e19d;"> /&gt;</span>
		<span style="color: #f4e19d;">&lt;title&gt;</span>Welcome!<span style="color: #f4e19d;">&lt;/title&gt;</span>
		<span style="color: #f4e19d;">&lt;!</span><span style="color: #a00000;">[CDATA[
            < > & "
		]]</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;/head&gt;</span>
	<span style="color: #f4e19d;">&lt;body&gt;</span>
		<span style="color: #808080;">&lt;!-- … --&gt;</span>
		<span style="color: #f4e19d;">&lt;pre&gt;&lt;code&gt;</span><span style="color: #c64432;">&amp;lt;</span>span<span style="color: #c64432;">&amp;gt;</span>Whatever<span style="color: #c64432;">&amp;lt;</span>/span<span style="color: #c64432;">&amp;gt;</span><span style="color: #f4e19d;">&lt;/code&gt;&lt;/pre&gt;</span>
	<span style="color: #f4e19d;">&lt;/body&gt;</span>
<span style="color: #f4e19d;">&lt;/html&gt;</span></code></pre>

### PHP

<pre style="color: #bbbbbb;background-color: #1e1e1e;"><code><span style="color: #808080;">#[ORM</span>\<span style="color: #9cbcc0;">Entity</span>(<span style="color: #5f84b2;">repositoryClass</span>: <span style="color: #b7f8ff;">UserRepository</span>::<span style="color: #99cf50;">class</span>)<span style="color: #808080;">]</span>
<span style="color: #808080;">#[</span><span style="color: #9cbcc0;">UniqueEntity</span>(<span style="color: #5f84b2;">fields</span>: [<span style="color: #aa0000;">'name'</span>], <span style="color: #5f84b2;">message</span>: <span style="color: #aa0000;">'app.user.not_unique'</span>)<span style="color: #808080;">]</span>
<span style="color: #99cf50;">class</span> <span style="color: #b7f8ff;">User</span> <span style="color: #99cf50;">implements</span> <span style="color: #b7f8ff;">UserInterface</span>
{
    <span style="color: #808080;">#[ORM</span>\<span style="color: #9cbcc0;">Id</span><span style="color: #808080;">]</span>
    <span style="color: #808080;">#[ORM</span>\<span style="color: #9cbcc0;">Column</span>(<span style="color: #5f84b2;">length</span>: <span style="color: #008080;">180</span>, <span style="color: #5f84b2;">unique</span>: <span style="color: #99cf50;">true</span>)<span style="color: #808080;">]</span>
    <span style="color: #99cf50;">private</span> ?<span style="color: #99cf50;">string</span> <span style="color: #3e87e3;">$name</span> = <span style="color: #99cf50;">null</span>;</code></pre>

### CSS

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code><span style="color: #f4e19d;">body</span> {
    <span style="color: #3e87e3;">--space</span>: <span style="color: #008080;">1.5</span><span style="color: #99cf50;">em</span>;
    <span style="color: #3e87e3;">--half-space</span>: <span style="color: #008080;">0.75</span><span style="color: #99cf50;">em</span>;
    <span style="color: #3e87e3;">--blue</span>: #<span style="color: #eeeeee;">56C8EA</span>;
}
<span style="color: #f4e19d;">aside</span> &gt; <span style="color: #f4e19d;">section</span> &gt; <span style="color: #f4e19d;">*</span><span style="color: #aa0000;">:</span><span style="color: #c64432;">not</span>(<span style="color: #aa0000;">.</span><span style="color: #a00000;">h2</span>) {
    margin-right: <span style="color: #e28964;">var</span>(<span style="color: #3e87e3;">--space</span>);
}
<span style="color: #aa0000;">#Contact</span> &gt; <span style="color: #f4e19d;">address</span> + <span style="color: #f4e19d;">p</span>, <span style="color: #aa0000;">#Contact</span> &gt; <span style="color: #f4e19d;">p</span> + <span style="color: #f4e19d;">p</span> {
    margin-top: <span style="color: #e28964;">var</span>(<span style="color: #3e87e3;">--half-space</span>);
}
<span style="color: #f4e19d;">input</span>[<span style="color: #008000;">type</span>=<span style="color: #aa0000;">"search"</span>] {
    width: <span style="color: #008080;">100</span><span style="color: #99cf50;">%</span>;
    border: <span style="color: #008080;">1</span><span style="color: #99cf50;">px</span><span style="color: #eeeeee;"> solid </span><span style="color: #e28964;">var</span>(<span style="color: #3e87e3;">--blue</span>);
}
@<span style="color: #0080ff;">media</span> <span style="color: #3e87e3;">print</span> {
    <span style="color: #f4e19d;">a</span>[<span style="color: #008000;">href</span>]<span style="color: #aa0000;">::</span><span style="color: #5555ff;">after</span> {
        content: <span style="color: #aa0000;">' ⊕'</span>;
    }
}</code></pre>

### JavaScript

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code><span style="color: #808080;">/**</span>
<span style="color: #808080;"> * </span>
<span style="color: #808080;"> */</span>
<span style="color: #89bdff;">$</span>(<span style="color: #99cf50;">function</span>() {
    <span style="color: #89bdff;">$</span>(<span style="color: #aa0000;">'[data-dynamic-options]'</span>).<span style="color: #89bdff;">each</span>( <span style="color: #99cf50;">function</span> () {
        <span style="color: #99cf50;">const</span> <span style="color: #5555ff;">selfId</span> = <span style="color: #aa0000;">'#'</span> + <span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">id</span>;
        <span style="color: #99cf50;">const</span> <span style="color: #5555ff;">sourceId</span> = <span style="color: #aa0000;">'#'</span> + <span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">id</span>.<span style="color: #89bdff;">replace</span>(<span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">name</span>.<span style="color: #89bdff;">substring</span>(<span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">name</span>.<span style="color: #89bdff;">lastIndexOf</span>(<span style="color: #aa0000;">'['</span>) + <span style="color: #008080;">1</span>, <span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">name</span>.<span style="color: #89bdff;">lastIndexOf</span>(<span style="color: #aa0000;">']'</span>)), <span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">dataset</span>.<span style="color: #5555ff;">dynamicOptions</span>);
        <span style="color: #89bdff;">$</span>(<span style="color: #5555ff;">sourceId</span>).<span style="color: #89bdff;">change</span>( <span style="color: #99cf50;">function</span>() {
            <span style="color: #99cf50;">const</span> <span style="color: #5555ff;">form</span> = <span style="color: #99cf50;">this</span>.<span style="color: #89bdff;">closest</span>(<span style="color: #aa0000;">'form'</span>);
            <span style="color: #3e87e3;">$</span>.<span style="color: #89bdff;">ajax</span>({
                <span style="color: #5555ff;">url</span>: <span style="color: #5555ff;">form</span>.<span style="color: #5555ff;">action</span>,
                <span style="color: #5555ff;">method</span>: <span style="color: #5555ff;">form</span>.<span style="color: #5555ff;">method</span>,
                <span style="color: #5555ff;">data</span>: {[<span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">name</span>]: <span style="color: #99cf50;">this</span>.<span style="color: #5555ff;">value</span>},
                <span style="color: #89bdff;">complete</span>: <span style="color: #99cf50;">function</span> (<span style="color: #3e87e3;">response</span>) {
                    <span style="color: #89bdff;">$</span>(<span style="color: #5555ff;">selfId</span>).<span style="color: #89bdff;">replaceWith</span>(
                        <span style="color: #89bdff;">$</span>(<span style="color: #3e87e3;">response</span>.<span style="color: #5555ff;">responseText</span>).<span style="color: #89bdff;">find</span>(<span style="color: #5555ff;">selfId</span>)
                    );
                }
            });
        })
    });
});</code></pre>

### TypeScript (TSX)

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code><span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">template</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">input</span> :<span style="color: #008000;">id</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">dynamicId</span>(<span style="color: #aa0000;">'P'</span>)<span style="color: #aa0000;">"</span> <span style="color: #008000;">type</span>=<span style="color: #aa0000;">"checkbox"</span> <span style="color: #008000;">value</span>=<span style="color: #aa0000;">"on"</span> <span style="color: #008000;">part</span>=<span style="color: #aa0000;">"positive"</span> :<span style="color: #008000;">title</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">positiveLabel</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">name</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">positiveName</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">checked</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">value</span> === <span style="color: #aa0000;">'on'</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">class</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">positiveInputClasses</span><span style="color: #aa0000;">"</span> @<span style="color: #008000;">change</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">change</span><span style="color: #aa0000;">"</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">label</span> :<span style="color: #008000;">for</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">dynamicId</span>(<span style="color: #aa0000;">'P'</span>)<span style="color: #aa0000;">"</span> <span style="color: #008000;">class</span>=<span style="color: #aa0000;">"visually-hidden"</span><span style="color: #f4e19d;">&gt;&lt;</span><span style="color: #f4e19d;">slot</span> <span style="color: #008000;">name</span>=<span style="color: #aa0000;">"positive-label"</span><span style="color: #f4e19d;">&gt;</span>{{ <span style="color: #5555ff;">positiveLabel</span> }}<span style="color: #f4e19d;">&lt;/</span><span style="color: #f4e19d;">slot</span><span style="color: #f4e19d;">&gt;&lt;/</span><span style="color: #f4e19d;">label</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">input</span> :<span style="color: #008000;">id</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">dynamicId</span>(<span style="color: #aa0000;">'I'</span>)<span style="color: #aa0000;">"</span> <span style="color: #008000;">type</span>=<span style="color: #aa0000;">"checkbox"</span> <span style="color: #008000;">value</span>=<span style="color: #aa0000;">""</span> :<span style="color: #008000;">title</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">indeterminateLabel</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">checked</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">value</span> == <span style="color: #99cf50;">undefined</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">disabled</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">value</span> === <span style="color: #99cf50;">undefined</span><span style="color: #aa0000;">"</span> <span style="color: #008000;">class</span>=<span style="color: #aa0000;">"visually-hidden"</span> @<span style="color: #008000;">change</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">change</span><span style="color: #aa0000;">"</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">label</span> :<span style="color: #008000;">for</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">dynamicId</span>(<span style="color: #aa0000;">'I'</span>)<span style="color: #aa0000;">"</span> <span style="color: #008000;">class</span>=<span style="color: #aa0000;">"visually-hidden"</span><span style="color: #f4e19d;">&gt;&lt;</span><span style="color: #f4e19d;">slot</span> <span style="color: #008000;">name</span>=<span style="color: #aa0000;">"indeterminate-label"</span><span style="color: #f4e19d;">&gt;</span>{{ <span style="color: #5555ff;">indeterminateLabel</span> }}<span style="color: #f4e19d;">&lt;/</span><span style="color: #f4e19d;">slot</span><span style="color: #f4e19d;">&gt;&lt;/</span><span style="color: #f4e19d;">label</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">input</span> :<span style="color: #008000;">id</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">dynamicId</span>(<span style="color: #aa0000;">'N'</span>)<span style="color: #aa0000;">"</span> <span style="color: #008000;">type</span>=<span style="color: #aa0000;">"checkbox"</span> <span style="color: #008000;">value</span>=<span style="color: #aa0000;">"off"</span> <span style="color: #008000;">part</span>=<span style="color: #aa0000;">"negative"</span> :<span style="color: #008000;">title</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">negativeLabel</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">name</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">negativeName</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">checked</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">value</span> === <span style="color: #aa0000;">'off'</span><span style="color: #aa0000;">"</span> :<span style="color: #008000;">class</span>=<span style="color: #aa0000;">"</span><span style="color: #5555ff;">negativeInputClasses</span><span style="color: #aa0000;">"</span> @<span style="color: #008000;">change</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">change</span><span style="color: #aa0000;">"</span><span style="color: #f4e19d;">&gt;</span>
	<span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">label</span> :<span style="color: #008000;">for</span>=<span style="color: #aa0000;">"</span><span style="color: #89bdff;">dynamicId</span>(<span style="color: #aa0000;">'N'</span>)<span style="color: #aa0000;">"</span> <span style="color: #008000;">class</span>=<span style="color: #aa0000;">"visually-hidden"</span><span style="color: #f4e19d;">&gt;&lt;</span><span style="color: #f4e19d;">slot</span> <span style="color: #008000;">name</span>=<span style="color: #aa0000;">"negative-label"</span><span style="color: #f4e19d;">&gt;</span>{{ <span style="color: #5555ff;">negativeLabel</span> }}<span style="color: #f4e19d;">&lt;/</span><span style="color: #f4e19d;">slot</span><span style="color: #f4e19d;">&gt;&lt;/</span><span style="color: #f4e19d;">label</span><span style="color: #f4e19d;">&gt;</span>
<span style="color: #f4e19d;">&lt;/</span><span style="color: #f4e19d;">template</span><span style="color: #f4e19d;">&gt;</span>
 
<span style="color: #f4e19d;">&lt;</span><span style="color: #f4e19d;">script</span> <span style="color: #008000;">setup</span> <span style="color: #008000;">lang</span>=<span style="color: #aa0000;">"ts"</span><span style="color: #f4e19d;">&gt;</span>
<span style="color: #99cf50;">import</span> { <span style="color: #b7f8ff;">Ref</span>, <span style="color: #b7f8ff;">computed</span>, <span style="color: #b7f8ff;">ref</span> } <span style="color: #99cf50;">from</span> <span style="color: #aa0000;">'vue'</span>
 
<span style="color: #99cf50;">const</span> <span style="color: #5555ff;">props</span> = <span style="color: #e28964;">withDefaults</span>(<span style="color: #e28964;">defineProps</span>&lt;<span style="color: #b7f8ff;">Props</span>&gt;(), {
	<span style="color: #5555ff;">id</span>: <span style="color: #3e87e3;">Math</span>.<span style="color: #89bdff;">random</span>().<span style="color: #89bdff;">toString</span>(<span style="color: #008080;">36</span>).<span style="color: #89bdff;">substring</span>(<span style="color: #008080;">2</span>, <span style="color: #008080;">8</span>),
	<span style="color: #5555ff;">outputVariant</span>: <span style="color: #aa0000;">'name'</span>,
	<span style="color: #5555ff;">positiveLabel</span>: <span style="color: #aa0000;">'Oui'</span>,
	<span style="color: #5555ff;">negativeLabel</span>: <span style="color: #aa0000;">'Non'</span>,
	<span style="color: #5555ff;">indeterminateLabel</span>: <span style="color: #aa0000;">'Non déterminé'</span>
})
 
<span style="color: #99cf50;">const</span> <span style="color: #5555ff;">value</span>: <span style="color: #b7f8ff;">Ref</span>&lt;<span style="color: #b7f8ff;">TriStateValue</span>&gt; = <span style="color: #e28964;">ref</span>(<span style="color: #5555ff;">props</span>.<span style="color: #5555ff;">initial</span>)
 
<span style="color: #99cf50;">const</span> <span style="color: #5555ff;">positiveInputClasses</span>: <span style="color: #b7f8ff;">Ref</span>&lt;{}&gt; = <span style="color: #e28964;">computed</span>(() =&gt; {
	<span style="color: #99cf50;">return</span> {
		<span style="color: #aa0000;">"visually-hidden"</span>: <span style="color: #5555ff;">value</span>.<span style="color: #5555ff;">value</span> === <span style="color: #aa0000;">'off'</span>,
		<span style="color: #aa0000;">"positive"</span>: <span style="color: #99cf50;">true</span>
	}
}) <span style="color: #99cf50;">as</span> <span style="color: #b7f8ff;">Ref</span>&lt;{}&gt;</code></pre>

### YAML

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code><span style="color: #f4e19d;">app</span>:
  <span style="color: #f4e19d;">login</span>: <span style="color: #99cf50;">&amp;</span><span style="color: #b7f8ff;">login</span>
    <span style="color: #f4e19d;">title</span>: <span style="color: #99cf50;">&amp;</span><span style="color: #b7f8ff;">title</span> <span style="color: #aa0000;">Authentification</span>
    <span style="color: #f4e19d;">heading</span>: <span style="color: #99cf50;">*</span><span style="color: #c64432;">title</span>
    <span style="color: #f4e19d;">user</span>: <span style="color: #aa0000;">Utilisateur</span>
    <span style="color: #f4e19d;">password</span>: <span style="color: #aa0000;">Mot de passe</span>
 
  <span style="color: #f4e19d;">register</span>:
    <span style="color: #99cf50;">&lt;&lt;</span>: <span style="color: #99cf50;">*</span><span style="color: #c64432;">login</span>
    <span style="color: #f4e19d;">pwet</span>: <span style="color: #aa0000;">tralala</span>
    <span style="color: #f4e19d;">dzim</span>: <span style="color: #008080;">12</span>
    <span style="color: #f4e19d;">boum</span>: <span style="color: #99cf50;">~</span>
    <span style="color: #f4e19d;">yeye</span>: <span style="color: #99cf50;">off</span></code></pre>

### Twig

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code><span style="color: #f4e19d;">&lt;!</span><span style="color: #a00000;">DOCTYPE html</span><span style="color: #f4e19d;">&gt;</span>
<span style="color: #f4e19d;">&lt;html&gt;</span>
	<span style="color: #f4e19d;">&lt;head&gt;</span>
		<span style="color: #f4e19d;">&lt;meta</span> <span style="color: #008000;">charset</span>=<span style="color: #aa0000;">"utf-8"</span><span style="color: #f4e19d;"> /&gt;</span>
		<span style="color: #f4e19d;">&lt;title&gt;</span>{% <span style="color: #e28964;">block</span> <span style="color: #3e87e3;">title</span> %}Welcome!{% <span style="color: #e28964;">endblock</span> %}<span style="color: #f4e19d;">&lt;/title&gt;</span>
		<span style="color: #f4e19d;">&lt;link</span> <span style="color: #008000;">rel</span>=<span style="color: #aa0000;">"icon"</span> <span style="color: #008000;">href</span>=<span style="color: #aa0000;">"data:image/svg+xml,&lt;svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22&gt;&lt;text y=%221.2em%22 font-size=%2296%22&gt;⚫️&lt;/text&gt;&lt;/svg&gt;"</span><span style="color: #f4e19d;"> /&gt;</span>
		<span style="color: #f4e19d;">&lt;meta</span> <span style="color: #008000;">name</span>=<span style="color: #aa0000;">"revision"</span> <span style="color: #008000;">content</span>=<span style="color: #aa0000;">"</span>{{ <span style="color: #aa0000;">'now'</span>|<span style="color: #e28964;">date</span>(<span style="color: #aa0000;">'Y-m-d'</span>) }}<span style="color: #aa0000;">"</span><span style="color: #f4e19d;"> /&gt;</span>
		{% <span style="color: #e28964;">block</span> <span style="color: #3e87e3;">stylesheets</span> %}
		{% <span style="color: #e28964;">endblock</span> %}
 
		{% <span style="color: #e28964;">block</span> <span style="color: #3e87e3;">javascripts</span> %}
		{% <span style="color: #e28964;">endblock</span> %}
	<span style="color: #f4e19d;">&lt;/head&gt;</span>
	<span style="color: #f4e19d;">&lt;body&gt;</span>
		{% <span style="color: #e28964;">block</span> <span style="color: #3e87e3;">flash</span> %}
		{% <span style="color: #e28964;">for</span> <span style="color: #3e87e3;">label</span>, <span style="color: #3e87e3;">messages</span> <span style="color: #99cf50;">in</span> <span style="color: #3e87e3;">app</span>.<span style="color: #3e87e3;">flashes</span> %}
			{% <span style="color: #e28964;">for</span> <span style="color: #3e87e3;">message</span> <span style="color: #99cf50;">in</span> <span style="color: #3e87e3;">messages</span> %}
				<span style="color: #f4e19d;">&lt;div</span> <span style="color: #008000;">class</span>=<span style="color: #aa0000;">"alert alert-</span>{{ <span style="color: #3e87e3;">label</span> }}<span style="color: #aa0000;"> mt-</span>{{ <span style="color: #3e87e3;">loop</span>.<span style="color: #3e87e3;">first</span> <span style="color: #99cf50;">?</span><span style="color: #aa0000;"> '3' </span><span style="color: #99cf50;">:</span><span style="color: #aa0000;"> '1' </span>}}<span style="color: #aa0000;">"</span><span style="color: #f4e19d;">&gt;</span>
					{{ <span style="color: #3e87e3;">message</span>|<span style="color: #e28964;">raw</span> }}
				<span style="color: #f4e19d;">&lt;/div&gt;</span>
			{% <span style="color: #e28964;">endfor</span> %}
		{% <span style="color: #e28964;">endfor</span> %}
		{% <span style="color: #e28964;">endblock</span> <span style="color: #3e87e3;">flash</span> %}
		{% <span style="color: #e28964;">block</span> <span style="color: #3e87e3;">body</span> %}{% <span style="color: #e28964;">endblock</span> %}
	<span style="color: #f4e19d;">&lt;/body&gt;</span>
<span style="color: #f4e19d;">&lt;/html&gt;</span></code></pre>

### SQL

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code><span style="color: #99cf50;">INSERT</span> <span style="color: #99cf50;">INTO</span>
        <span style="color: #aa0000;">`new`</span>.<span style="color: #aa0000;">`values`</span>
    <span style="color: #99cf50;">SELECT</span>
                pv.<span style="color: #aa0000;">`id`</span>,
                pv.<span style="color: #aa0000;">`name`</span>,
                <span style="color: #e28964;">trim</span>(pv.<span style="color: #aa0000;">`value`</span>)
        <span style="color: #99cf50;">FROM</span>
                    <span style="color: #aa0000;">`previous`</span>.<span style="color: #aa0000;">`values`</span> <span style="color: #99cf50;">AS</span> pv
            <span style="color: #99cf50;">INNER JOIN</span>
                    <span style="color: #aa0000;">`previous`</span>.<span style="color: #aa0000;">`account`</span>
                <span style="color: #99cf50;">ON</span>
                        <span style="color: #aa0000;">`previous`</span>.<span style="color: #aa0000;">`account`</span>.<span style="color: #aa0000;">`id`</span> = pv.id
        <span style="color: #99cf50;">WHERE</span>
                pv.id <span style="color: #99cf50;">NOT</span> <span style="color: #99cf50;">IN</span> (<span style="color: #aa0000;">`new`</span>.<span style="color: #aa0000;">`values`</span>.<span style="color: #aa0000;">`id`</span>)</code></pre>

<!-- ### 

<pre style="color: #bbbbbb; background-color: #1e1e1e;"><code></code></pre> -->