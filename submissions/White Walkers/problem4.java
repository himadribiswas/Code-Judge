import java.io.*;
class problem4
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int l,i,a,b;
String s,s1,t,t1;t1="";s="";t="";s1="";
char ch,ch1;ch1=' ';ch=' ';
System.out.println("Enter a word:");
s1=br.readLine();
l=s1.length();
for(i=0;i<l;i++)
{
a=(int)s1.charAt(i);
b=a+1;
ch1=(char)b;
s=s+ch1;
}
System.out.println(s);
}
}
