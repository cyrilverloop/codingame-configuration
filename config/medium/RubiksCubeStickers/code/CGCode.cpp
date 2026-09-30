#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string u;
    string f;
    string r;
    string b;
    string l;
    string d;
    cin >> u >> f >> r >> b >> l >> d; cin.ignore();
    for (int i = 0; i < 4; i++) {
        string line;
        getline(cin, line);
    }
    for (int i = 0; i < 3; i++) {
        string line;
        getline(cin, line);
    }
    for (int i = 0; i < 4; i++) {
        string line;
        getline(cin, line);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "UUU" << endl;
    cout << "UUU" << endl;
    cout << "UUU" << endl;
    cout << "---" << endl;
    cout << "FFF|RRR|BBB|LLL" << endl;
    cout << "FFF|RRR|BBB|LLL" << endl;
    cout << "FFF|RRR|BBB|LLL" << endl;
    cout << "---" << endl;
    cout << "DDD" << endl;
    cout << "DDD" << endl;
    cout << "DDD" << endl;
}