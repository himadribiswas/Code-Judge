import java.util.*;
class problem4
{
 public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
String s=sc.next();

char x;
String st="";
for(int i=0;i<s.length();i++)
{
x=s.charAt(i);
st=st+((char)(x+1));
}
System.out.println(st);
}
}