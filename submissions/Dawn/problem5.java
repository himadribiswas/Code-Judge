import java.util.*;
class problem5
{
 public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
String s=sc.next();
char x;
String st="";
s=s.toUpperCase();
for(int i=0;i<s.length();i++)
{
x=s.charAt(i);
if(x=='A' || x=='E' || x=='I' || x=='O' || x=='U')
{st=s.substring(i)+s.substring(0,i)+"AY";	
break;}
}
System.out.println(st);
}
}