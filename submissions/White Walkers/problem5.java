import java.io.*;
class white_walkers
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int l,i;
String s,s1,t,t1;t1="";s="";t="";s1="";
char ch;ch=' ';
System.out.println("Enter a word:");
s1=br.readLine();
s=s1.toUpperCase();
l=s.length();
for(i=0;i<l;i++)
{
ch=s.charAt(i);
if(ch=='A'||ch=='E'||ch=='I'||ch=='O'||ch=='U')
{
t=s.substring(i,l)+t1+"AY";
break;
}
else
{
t1=t1+ch;
ch=' ';
}
}
System.out.println(t);
}
}
