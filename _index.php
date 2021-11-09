
<table border width=100%><tr>
   <th><a href="StartCode.zip"><font color="#ff0000">StartCode</font></a></th>
   <th bgcolor="#0ccccc">DSA sequence examples for week 1</th>
   </tr>
   </table>
<table border width=100%><tr>
   <td colspan=2> The following code manipulates (i) <font color="#0000ff"><b>a sorted sequence</b></font> (ascending order)
   <br> (ii) <font color="#0000ff"><b>a sequence by position</b></font> and  hence
        (iii) <font color="#0000ff"><b>a stack</b></font> and
        (iv) <font color="#0000ff"><b>a queue</b></font>.
   <br> The main operations are: <b><font color="#0000ff">add, remove, find and display</b></font>
   <br> <font color="#0000ff"><b>Design:</b></font> <b>User Interface / front-end / back-end</b> organisation
   <br> Below are three possible implementations for the <font color="#0000ff"><b>backend</b></font>.
   <ol>
   <li> <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqA.c"><font color="#0000ff"><b>BESeqA.c</b></font></a>
        - array using <b>iteration</b>
   <li> <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqP.c"><font color="#0000ff"><b>BESeqP.c</b></font></a>
        - structure and pointer using <b>iteration</b>
   <li> <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqR.c"><font color="#0000ff"><b>BESeqR.c</b></font></a>
        - structure and pointer using <b>recursion</b>
   <br> all three are functionally equivalent
   </ol>
   </td></tr>
   </table>

<br>
<table noborder width=100%>
<tr>
<td valign=top width=25%>
<table border width=90%>
<tr bgcolor="#f7fe2e"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/Dmenu.c">Dmenu.c</a></th></tr>
<tr bgcolor="#81bef7"><th>use <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/UImenu.h">UImenu.h</a></th></tr>
</table>
<p><font size=1><b>xxx.h is an interface file</b></font>
</td>

<td valign=top width=25%>
<table border width=90%>
<tr bgcolor="#81bef7"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/UImenu.h">UImenu.h</a></th></tr>
<tr bgcolor="#81bef7"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/UIdialog.h">UIdialog.h</a></th></tr>
</table>
<br>
<table border width=90%>
<tr bgcolor="#81bef7"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/UImenu.c">UImenu.c</a><br>menu + dialog</th></tr>
<tr bgcolor="#ffcccc"><th>use <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/FESeq.h">FESeq.h</a></th></tr>
</table>
</td>

<td valign=top width=25%>
<table border width=90%>
<tr bgcolor="#ffcccc"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/FESeq.h">FESeq.h</a></th></tr>
</table>
<br><br>
<table border width=90%>
<tr bgcolor="#ffcccc"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/FESeq.c">FESeq.c</a></th></tr>
<tr bgcolor="#81bef7"><th>use <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/UIdialog.h">UIdialog.h</a></th></tr>
<tr bgcolor="#ccffcc"><th>use <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeq.h">BESeq.h</a></th></tr>
</table>
</td>

<td valign=top width=25%>
<table border width=90%>
<tr bgcolor="#ccffcc"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeq.h">BESeq.h</a></th></tr>
</table>
<br><br>
<table border width=90%>
<tr bgcolor="#ccffcc"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqA.c">BESeqA.c</a> or </th></tr>
<tr bgcolor="#ccffcc"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqP.c">BESeqP.c</a> or </th></tr>
<tr bgcolor="#ccffcc"><th><a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqR.c">BESeqR.c</a> </th></tr>
<tr bgcolor="#ccffcc"><th>ADT: sequence</th></tr>
</table>
</td>
</tr>
</table>

<br>
<table border width=100%>
<tr><td>
<b>Understand</b> the following code:
     <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqA.c"><b>BESeqA.c</b></a>
     <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqP.c"><b>BESeqP.c</b></a>
     <a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqR.c"><b>BESeqR.c</b></a>
</td></tr>
</table>

<table border width=100%>
<tr><td>
<ul>

<li><font color="#0000ff"><b> gcc -Wall -c </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/Dmenu.c"><font color="#0000ff"><b>Dmenu.c</b></font></a>
--- compile the driver
<li><font color="#0000ff"><b> gcc -Wall -c </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/UImenu.c"><font color="#0000ff"><b>UImenu.c</b></font></a>
--- compile the user menu & dialog
<li><font color="#0000ff"><b> gcc -Wall -c </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/FESeq.c"><font color="#0000ff"><b>FESeq.c</b></font></a>
--- compile the Front End (FE)

<li><font color="#0000ff"><b> gcc -Wall -c </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqA.c"><font color="#0000ff"><b>BESeqA.c</b></font></a>
--- compile the Back End (BE) (array)
<li><font color="#0000ff"><b> gcc -Wall -c </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqP.c"><font color="#0000ff"><b>BESeqP.c</b></font></a>
--- compile the Back End (BE) (pointer)
<li><font color="#0000ff"><b> gcc -Wall -c </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqR.c"><font color="#0000ff"><b>BESeqR.c</b></font></a>
--- compile the Back End (BE) (recursive)
</ul>
</td></tr>
</table>

<table border width=100%>
<tr><td>
<ul>
<li>Build the system (pointer version)
<br><font color="#0000ff"><b> gcc -Wall -o seqP </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/Dmenu.c"><font color="#0000ff"><b>Dmenu.c</b></font></a>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/UImenu.c">  <font color="#0000ff"><b>UImenu.c</b></font></a>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/FESeq.c"><font color="#0000ff"><b>FESeq.c</b></font></a>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/BESeqP.c"><font color="#0000ff"><b>BESeqP.c</b></font></a>

<li>test the system
<font color="#0000ff"><b> ./seqP &lt; </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/script"><font color="#0000ff"><b>script</b></font></a>
<font color="#0000ff"><b> &gt; </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/seqP.out"><font color="#0000ff"><b>seqP.out</b></font></a>


<li>build and test all 3 systems:
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/buildall"><font color="#0000ff"><b>./buildall</b></font></a>
<font color="#0000ff"><b> &gt; </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/b.out"><font color="#0000ff"><b>b.out</b></font></a>
<font color="#0000ff"><b> 2&gt; </b></font>
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/b.err"><font color="#0000ff"><b>b.err</b></font></a>

<li> compare the 2 backend modules <font color="#0000ff"><b>
<br>&gt; </b></font> <b>diff BESeqA.c BESeqP.c</b> gives the following
<a href="http://www.cs.kau.se/cs/education/courses/dvgb03/StartCodeSeq/diffAP1.out"><font color="#0000ff"><b>output</b></font></a>
<br> i.e the difference in code between the array and structure & pointer (iterative) implementations (the abstract code is the same)

</td></tr>
</table>







