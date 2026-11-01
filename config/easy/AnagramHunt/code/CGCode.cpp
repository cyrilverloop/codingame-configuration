#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string mode;
    cin >> mode; cin.ignore();
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string name;
        string hand;
        cin >> name >> hand; cin.ignore();
    }
    int d;
    cin >> d; cin.ignore();
    for (int i = 0; i < d; i++) {
        string dict;
        cin >> dict; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "winner_name winner_word" << endl;
}